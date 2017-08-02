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
    public $modelo_idmodelo;
    
    
    public function __construct() {
        parent::__construct();
    }
    
}
