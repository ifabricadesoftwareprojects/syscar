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
        $this->_data['msg'] = "";
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
                redirect('admin/marcas');
            }
            else{
                $this->_data['msg'] = 'Email e/ou senha incorretos';
            }
        }
        $this->view('login', $this->_data, null);
    }
}
