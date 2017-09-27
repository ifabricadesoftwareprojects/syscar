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
            $this->senha = md5($this->senha);
            $this->token = md5(date('YmdHis'));
            parent::insert();
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    
    public function update($field, $value,$confirmar = '', $changed_password = false) {
        try {
            if($changed_password === true){
                $this->validar_dados($confirmar);
                $this->senha = md5($this->senha);
            }
            else {
                $this->validar_dados($confirmar,false);
            }
            parent::update($field, $value);
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    
    public function validar_dados($confirmar, $validar_senha = true)
    {
        //falta a customizar a mensagem
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        $validate->set_message('is_equals', 'A senha é inválida');
        
        $validate->set('nome', $this->nome)->is_required()->min_length(3)->max_length(75)
                 ->set('email', $this->email)->is_required()->is_email()
                 ->set('perfil', $this->perfil)->is_required();
        
        if($validar_senha == true)
        {
            $validate->set('senha', $this->senha)->is_required()->min_length(7)->is_equals($confirmar);
        }
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
    
    public function autenticar()
    {
        if(empty($this->email) || empty($this->senha)){
            return false;
        }
        //Criptografa a senha
        $this->senha = md5($this->senha);
        $usuario =  $this->db
                ->select('nome, token, perfil')
                ->from('usuario u')
                ->where('email', $this->email)
                ->where('senha', $this->senha)
                
                ->get()
                ->row(0, $this->model);
        if(!is_object($usuario)){
            return false;
        }
        
        $this->nome = $usuario->nome;
        $this->token = $usuario->token;
        $this->perfil = $usuario->perfil;
        return true;
    }
    
    public function get_id_by_token($token)
    {
        $usuario = $this->findBy('token', $token, 'idusuario');
        if(count($usuario) == 0){
            return false;
        }
        return $usuario[0]->idusuario;
    }
}
