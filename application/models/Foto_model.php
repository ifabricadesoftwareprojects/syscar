<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Foto_model
 *
 * @author Aluno
 */
class Foto_model {
    //put your code here
    protected $table = 'foto';
    protected $pk = 'idfoto';
    
    public $idfoto;
    public $caminhofoto;
    public $anuncio_idanuncio;
    
    public function __construct() {
        parent::__construct();
    }
   
}
