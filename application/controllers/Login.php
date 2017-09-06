<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Home
 *
 * @author Rafael W. Pinheiro
 */
class Login extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        if($this->input->post()){
            $this->load->model('usuario_model');
            $this->usuario_model->email = $this->input->post('email');
            $this->usuario_model->senha = $this->input->post('senha');
            
            if($this->usuario_model->autenticar() !== false){
                $this->session->set_userdata(
                        array(
                            'token'  => $this->usuario_model->token,
                            'nome'   => $this->usuario_model->nome,
                            'perfil' => $this->usuario_model->perfil 
                        )
                    );
                redirect('');
            }
            else{
                $this->_data['msg'] = 'Email e/ou senha incorretos';
            }
        }
    }
}