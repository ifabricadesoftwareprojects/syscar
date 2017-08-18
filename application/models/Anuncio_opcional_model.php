<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelo_opcional_model
 *
 * @author Aluno
 */
class Anuncio_opcional_model extends MY_Model{
    //put your code here
    protected $table = 'anuncio_opcional';
    protected $pk = 'opcional_idopcional';
    protected $pk = 'anuncio_idanuncio';
    
    public $anuncio_idanuncio;
    public $opcional_idopcional;
    
    
    
    
    public function __construct() {
        parent::__construct();
    }
    
}
