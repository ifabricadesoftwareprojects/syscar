<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Jabes B. do Livramento
 */
class Usuarios extends MY_Controller{
    //put your code here
    protected $_template_folder = 'admin';
    //protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model', 'usuario');
        
        $this->_data['active'] = 'usuarios';
        $this->_data['title'] = 'Gerenciar Usuarios';
    }
    
    public function index()
    {
        $this->_data['usuarios'] = $this->usuario->findAll();
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->view('usuarios', $this->_data);
    }
    
    public function adicionar()
    {
        if($this->input->post()){
            $this->usuario = $this->usuario->post_to($this->input->post(), $this->usuario);
            try{
                $this->usuario->insert($this->input->post('confirmar'));
                $this->session->set_flashdata('msg', 'Usuario salvo com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('usuarios');
            } catch (Exception $ex) {
                $this->session->set_flashdata('abrir', 'Usuario');
                $this->session->set_flashdata('msg', 'Erro ao salvar usuario:');
                $this->session->set_flashdata('erro', $this->usuario->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['usuario'] = $this->usuario;
        
        $this->_data['sub_title'] = 'Adicionar novo usuario';
        $this->_data['action'] = 'Adicionar'; //Como Add e Editar sao no mesmo form, essa var será usada no botao de submit
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_usuario'] = $this->session->flashdata('dados');
        
        $this->view('usuarios_form', $this->_data);
    }
    
    public function editar($id = null)
    {
        if(is_null($id)){
            admin_redirect('usuarios');
        }
        if($this->input->post()){
            $this->usuario = $this->usuario->find($id);
            $this->usuario = $this->usuario->post_to($this->input->post(), $this->usuario);
            try{
                $this->usuario->update('idusuario', $this->usuario->idusuario, $this->input->post('confirmar'));
                $this->session->set_flashdata('msg', 'Usuario atualizado com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('usuarios');
            } catch (Exception $ex) {
                $this->session->set_flashdata('abrir', 'Usuario');
                $this->session->set_flashdata('msg', 'Erro ao atualizar usuario:');
                $this->session->set_flashdata('erro', $this->usuario->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['usuario'] = $this->usuario->find($id);
        
        $this->_data['sub_title'] = 'Editar usuario';
        $this->_data['action'] = 'Atualizar';
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_usuario'] = $this->session->flashdata('dados');
        $this->view('usuarios_form', $this->_data);
    }
}
