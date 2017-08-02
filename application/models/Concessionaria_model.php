<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Concessionaria_model
 *
 * @author Aluno
 */
class Concessionaria_model {
    //put your code here
    protected $table = 'concessionaria';
    protected $pk = 'usuario_idusuario';
    
    public $usuario_idusuario;
    public $cnpj;
    
    
    
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
        
        $validate->set('cnpj', $this->cnpj)->is_required();

        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
