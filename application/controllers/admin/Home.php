<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Home
 *
 * @author Rafael W. Pinheiro
 */
class Home extends MY_Controller {
    
    protected $_template_folder = 'admin';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        //Verifica "porcamente" se o usuário está autenticado!!!=)
        if (!isset($this->session->token)) {
            redirect('admin/login');
        }
        
        $this->_data['active'] = 'home';
        $this->_data['title'] = 'Home';
    }
    
    public function index()
    {
        $this->view('home', $this->_data);
    }
    
    
        
}
