<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Opcional
 *
 * @author Aluno
 */
class Opcionais extends MY_Controller{
    //put your code here
    protected $_template_folder = 'admin';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        //Verifica "porcamente" se o usuário está autenticado!!!=)
        if (!isset($this->session->token)) {
            redirect('admin/login');
        }
        
        $this->load->model('opcional_model', 'opcional');
        $this->load->helper('form');
        
        $this->_data['active'] = 'opcionais';
        $this->_data['title'] = 'Gerenciar Opcional';
    }
    
    public function index()
    {
        $this->_data['opcionais'] = $this->opcional->get_opcionais($this->input->get('q'));
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->view('opcionais', $this->_data);
    }
    
    public function adicionar()
    {
        if($this->input->post()){
            $this->opcional = $this->opcional->post_to($this->input->post(), $this->opcional);
            try{
                $this->opcional->insert();
                $this->session->set_flashdata('msg', 'Opcional salvo com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('opcionais');
            } catch (Exception $ex) {
                $this->session->set_flashdata('abrir', 'Opcional');
                $this->session->set_flashdata('msg', 'Erro ao salvar opcional:');
                $this->session->set_flashdata('erro', $this->opcional->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['opcional'] = $this->opcional;
        
        $this->_data['sub_title'] = 'Adicionar novo opcional';
        $this->_data['action'] = 'Adicionar'; //Como Add e Editar sao no mesmo form, essa var será usada no botao de submit
        
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_opcional'] = $this->session->flashdata('dados');
        
        $this->view('opcionais_form', $this->_data);
    }
    
    public function editar($id = null)
    {
        if(is_null($id)){
            admin_redirect('opcionais');
        }
        if($this->input->post()){
            $this->opcional = $this->opcional->find($id);
            $this->opcional = $this->opcional->post_to($this->input->post(), $this->opcional);
            try{
                $this->opcional->update('idopcional', $this->opcional->idopcional);
                $this->session->set_flashdata('msg', 'Opcional atualizado com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('opcionais');
            } catch (Exception $ex) {
                
                $this->session->set_flashdata('abrir', 'Opcional');
                $this->session->set_flashdata('msg', 'Erro ao atualizar opcional:');
                $this->session->set_flashdata('erro', $this->opcional->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
                
            }
        }
        $this->_data['opcional'] = $this->opcional->find($id);
        
        $this->_data['sub_title'] = 'Editar Opcional';
        $this->_data['action'] = 'Atualizar';
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_opcional'] = $this->session->flashdata('dados');
        $this->view('opcionais_form', $this->_data);
    }
   
}
