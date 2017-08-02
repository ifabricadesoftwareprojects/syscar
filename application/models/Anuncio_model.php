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
    public $modelo_idmodelo;
    public $km;
    public $anofab;
    public $anomodelo;
    public $aceitatrocal;
    public $unicodono;
    public $valor;
    public $usuario_idusuario;
    
    public function __construct() {
        parent::__construct();
    }
     
    public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        $validate->set('dataanuncio', $this->dataanuncio)->is_required();
        $validate->set('dataaexpiracao', $this->dataexpiracao)->is_required();
        $validate->set('statusanuncio', $this->statusanuncio)->is_required();
        $validate->set('descricaoanuncio', $this->descricaoanuncio)->is_required();
        $validate->set('km', $this->km)->is_required()->is_float();
        $validate->set('statusanuncio', $this->statusanuncio)->is_required();
        $validate->set('anofab', $this->anofab)->is_required()->is_integer();
        $validate->set('anomodelo', $this->anomodelo)->is_required()->is_integer();
        $validate->set('valor', $this->valor)->is_required()->is_float();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
