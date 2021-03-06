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
class Modelo_model extends MY_Model{
    //put your code here
    protected $table = 'modelo';
    protected $pk = 'idmodelo';
    
    public $idmodelo;
    public $nomemodelo;
    public $marca_idmarca;


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
    public function update($field, $value,$confirmar = '') {
        try {
            $this->validar_dados($confirmar);
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
        
        $validate->set('nomemodelo', $this->nomemodelo)->is_required();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
    
    public function get_modelos($nome = null)
    {
        //Consulta Modelo JOIN Marca!!!
        $query = $this->db
                ->from('modelo mo')
                        ->join('marca ma', 'ma.idmarca = mo.marca_idmarca');
                        
        
        if($nome != null)
        {
            $query = $query->like('mo.nomemodelo', $nome);
        }
        return $query->get()->result();       
       
    }
    
     public function get_modelos_by_marca_array($marca_idmarca)
    {
        $rs = $this->db
                ->where('marca_idmarca', $marca_idmarca)
                ->get($this->table)
                ->result();
        
        $modelos = array();
        if(is_array($rs)){
            foreach ($rs as $reg){
                $modelos[$reg->idmodelo] = $reg->nomemodelo;
            }
        }
        return $modelos;
    }
    public function get_modelos_array()
    {
        $rs = $this->db->get($this->table)
                ->result();
        
        $modelos = array();
        if(is_array($rs)){
            foreach ($rs as $reg){
                $modelos[$reg->idmodelo] = $reg->nomemodelo;
            }
        }
        return $modelos;
    }
}