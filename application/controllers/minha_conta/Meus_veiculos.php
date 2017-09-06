<?php
/**
 * Description of Meus_dados
 *
 * @author Aluno
 */
class Meus_veiculos extends MY_Controller {
    protected $_template_folder = 'site';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        if(!$this->session->token){
            redirect('');
        }
    }
    
    public function index()
    {
        $this->view('meus_veiculos', $this->_data);
    }
    
    public function adicionar()
    {
        $this->view('meus_veiculos_form', $this->_data);
    }
}
