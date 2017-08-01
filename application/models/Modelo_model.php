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
    
    public function get_modelos()
    {
        //Consulta Modelo JOIN Marca!!!
         return $this->db
                        ->from('modelo mo')
                        ->join('marca ma', 'ma.idmarca = mo.marca_idmarca')
                        ->get()
                        ->result();
    }
}