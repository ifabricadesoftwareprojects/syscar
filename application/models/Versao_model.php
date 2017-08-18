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
    class Versao_model extends MY_Model{
    //put your code here
    protected $table = 'versao';
    protected $pk = 'idversao';
    
    public $idversao;
    public $descricaoversao;
    public $motor;
    public $combustivel;
    public $portas;
    public $cambio;
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
    public function update($field, $value,$confirmar = '') {
        try {
            $this->validar_dados($confirmar);
            parent::update($field, $value);
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    public function get_versoes($nome = null)
    {
        //Consulta Modelo JOIN Marca!!!
        $query = $this->db
                        ->from('versao v')  
                            ->join('modelo mo', 'mo.idmodelo = v.modelo_idmodelo')  
                            ->join('marca ma', 'ma.idmarca = mo.marca_idmarca');
          
        if($nome != null)
        {
            $query = $query->like('v.descricaoversao', $nome);
        }
        return $query->get()->result(); 
                        
    }
    
    
    public function get_versao_by_id($idversao)
    {
        //Consulta Modelo JOIN Marca!!!
         return $this->db
                        ->from('versao v')  
                        ->join('modelo mo', 'mo.idmodelo = v.modelo_idmodelo')  
                        ->join('marca ma', 'ma.idmarca = mo.marca_idmarca')
                        ->where('v.idversao', $idversao)
                        ->get()
                         ->row(0, $this->model);
    }

        public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        $validate->set('descricaoversao', $this->descricaoversao)->is_required();
        $validate->set('motor', $this->motor)->is_required();
        $validate->set('combustivel', $this->combustivel)->is_required();
        $validate->set('portas', $this->portas)->is_required();
        $validate->set('cambio', $this->cambio)->is_required();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}