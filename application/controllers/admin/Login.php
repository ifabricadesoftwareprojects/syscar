<?php
/**
 * Description of Login
 *
 * @author rafael
 */
class Login extends MY_Controller {
    protected $_template_folder = 'admin';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->view('login', $this->_data, null);
    }
}
