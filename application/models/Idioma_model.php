<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Idioma_model
 *
 * @author Aluno
 */
class Idioma_model extends MY_Model{
    //put your code here
    protected $table = 'idioma';
    protected $pk = 'ididioma';
    
    public $ididioma;
    public $descricao_idioma;
    public $le;
    public $escreve;
    public $fala;
    public $entende;
    public $candidato_usuario_idusuario;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert() {
        try {
            $this->validar_dados();
            parent::insert();
        } catch (Exception $ex) {
            throw new Exception();
        }
    }

        public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        $validate->set('descricao_idioma', $this->descricao_idioma)->is_required();
        $validate->set_message('is_required', 'Selecione uma opção para o campo %s');
        $validate->set('le', $this->le)->is_required()
                ->set('escreve', $this->escreve)->is_required()
                ->set('fala', $this->fala)->is_required()
                ->set('entende', $this->entende)->is_required();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
