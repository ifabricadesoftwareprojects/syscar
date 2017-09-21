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
        $this->load->model('usuario_model', 'usuario');
    }
    
    public function index()
    {
        $this->_data['abrir'] = $this->session->flashdata('abrir');
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_usuario'] = $this->session->flashdata('dados'); 
        $this->view('home', $this->_data);
    }
    
    public function cadastrar()
    {
        if($this->input->post()){
            $this->usuario = $this->usuario->post_to($this->input->post(), $this->usuario);
            try{
                $this->usuario->insert($this->input->post('confirmar'));
                $this->session->set_flashdata('msg', 'Usuario salvo com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
            } catch (Exception $ex) {
                $this->session->set_flashdata('abrir', 'signupform');
                $this->session->set_flashdata('msg', 'Erro ao salvar usuario:');
                $this->session->set_flashdata('erro', $this->usuario->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
                redirect('home');
            }
        }
        $this->_data['usuario'] = $this->usuario;
        
        $this->_data['sub_title'] = 'Cadastrar novo usuario';
        $this->_data['action'] = 'Cadastrar'; 
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_usuario'] = $this->session->flashdata('dados');
        
        $this->view('home', $this->_data);
    }
}
