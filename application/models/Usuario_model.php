<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_model
 *
 * @author Aluno
 */
class Usuario_model extends MY_Model{
    //put your code here
    protected $table = 'usuario';
    protected $pk = 'idusuario';
    
    public $idusuario;
    public $nome;
    public $email;
    public $senha;
    public $perfil;
    public $token;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($confirmar = '') {
        try {
            $this->validar_dados($confirmar);
            parent::insert();
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    
    public function update($field, $value,$confirmar = '') {
        try {
            $this->validar_dados($confirmar);
            parent::update($field, $value);
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    
    public function validar_dados($confirmar)
    {
        //falta a customizar a mensagem
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        $validate->set_message('is_equals', 'A senha é inválida');
        
        $validate->set('nome', $this->nome)->is_required()->min_length(3)->max_length(75)
                 ->set('email', $this->email)->is_required()->is_email()
                 ->set('senha', $this->senha)->is_required()->min_length(7)->is_equals($confirmar);
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
