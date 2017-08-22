<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of opcional_model
 *
 * @author Aluno
 */
class opcional_model extends MY_Model{
    //put your code here
    protected $table = 'opcional';
    protected $pk = 'idopcional';
    
    public $idopcional;
    public $descricaoopcional;
    public $anuncio_idanuncio;
    
    
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
    public function update($field, $value) {
        try {
            $this->validar_dados();
            parent::update($field, $value);
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    
    public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        $validate->set('descricaoopcional', $this->descricaoopcional)->is_required();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
    
    public function get_opcionais($nome = null)
    {
        
        $query = $this->db
                ->from('opcional op');
        if($nome != null)
        {
            $query = $query->like('op.descricaoopcional', $nome);
        }
        return $query->get()->result();       
       
    }
    
}
