<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Logout
 *
 * @author Aluno
 */
class Logout extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $userdata = array('token', 'nome', 'perfil');
        $this->session->unset_userdata($userdata);
        redirect('');
    }
}
