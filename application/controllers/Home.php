<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Home
 *
 * @author Rafael W. Pinheiro
 */
class Home extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('theme');
    }
    
    public function index()
    {
        $dados['msg'] = get_alert_code($this->session->flashdata('msg'), 'danger');
        $dados['erros'] = $this->session->flashdata('erros');
        $dados['usuario'] = $this->session->flashdata('dadosusuario');
        $dados['abrir'] = $this->session->flashdata('abrir');
        //die($dados['abrir']);
        $this->view('home', $dados);
    }
    
    
        
}
