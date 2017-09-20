<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Anuncio_model
 *
 * @author Aluno
 */
class Anuncio_model extends MY_Model{
    //put your code here
    protected $table = 'anuncio';
    protected $pk = 'idanuncio';
    
    public $idanuncio;
    public $dataanuncio;
    public $dataexpiracao;
    public $statusanuncio;
    public $descricaoanuncio;
    public $km;
    public $anofab;
    public $anomodelo;
    public $aceitatrocal;
    public $unicodono;
    public $valor;
    public $usuario_idusuario;
    public $versao_idversao;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function inserir_anuncio($opcionais = array())
    {
        $CI =& get_instance();
        $CI->load->model('anuncio_opcional_model', 'opcional');
        
        $this->statusanuncio = 'Ativo';
        $this->dataanuncio = date('Y-m-d');
        $this->dataexpiracao = '2017-12-31';
        
        try{
            $this->validar_dados();
            
            //Inicia a transacao. Ou insere tudo (Anuncio e Anuncio_Opcional) (commit), 
            //ou nao insere nada (rollback)!!!
            $this->db->trans_begin();
            //insere o anuncio
            parent::insert();
            $id_anuncio = $this->db->insert_id();
            $CI->opcional->anuncio_idanuncio = $id_anuncio;
            foreach ($opcionais as $op){
                $CI->opcional->opcional_idopcional = $op;
                $CI->opcional->insert();
            }
            $this->db->trans_commit();
        } catch (Exception $e) {
            $this->db->trans_rollback(); //Desfaz o que foi feito antes de dar erro
            throw new Exception('Erro ao salvar anuncio' + $e->getMessage());
        }
    }
     
    public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        $validate->set('dataanuncio', $this->dataanuncio)->is_required()
        ->set('dataaexpiracao', $this->dataexpiracao)->is_required()
        ->set('statusanuncio', $this->statusanuncio)->is_required()
        ->set('descricaoanuncio', $this->descricaoanuncio)->is_required()
        ->set('km', $this->km)->is_required()->is_integer()
        ->set('statusanuncio', $this->statusanuncio)->is_required()
        ->set('anofab', $this->anofab)->is_required()->is_integer()
        ->set('anomodelo', $this->anomodelo)->is_required()->is_integer()
        ->set('valor', $this->valor)->is_required()->is_float();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
