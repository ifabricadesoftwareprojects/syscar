<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Home
 *
 * @author Rafael W. Pinheiro
 */
class Home extends MY_Controller {
    
    protected $_template_folder = 'site';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->view('home', $this->_data);
    }
}
