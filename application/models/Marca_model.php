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
class Marca_model extends MY_Model{
    //put your code here
    protected $table = 'marca';
    protected $pk = 'idmarca';
    
    public $idmarca;
    public $nomemarca;
    
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
        
        $validate->set('nomemarca', $this->nomemarca)->is_required();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
    
    public function get_marcas_array()
    {
        $rs = $this->db->get($this->table)
                ->result();
        
        $marcas = array();
        if(is_array($rs)){
            foreach ($rs as $reg){
                $marcas[$reg->idmarca] = $reg->nomemarca;
            }
        }
        return $marcas;
    }
}
