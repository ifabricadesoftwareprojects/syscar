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
class modelo_opcional_model extends MY_Model{
    //put your code here
    protected $table = 'modelo_opcional';
    protected $pk = 'opcional_idopcional';
    protected $pk = 'modelo_idmodelo';
    
    public $opcional_idopcional;
    public $modelo_idmodelo;
    
    
    
    public function __construct() {
        parent::__construct();
    }
    
}
