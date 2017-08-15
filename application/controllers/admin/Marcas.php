<?php
/**
 * Description of Marca
 *
 * @author rafael
 */
class Marcas extends MY_Controller {
    
    protected $_template_folder = 'admin';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        //Verifica "porcamente" se o usuário está autenticado!!!=)
        if (!isset($this->session->token)) {
            redirect('admin/login');
        }
        
        $this->load->model('marca_model', 'marca');
        
        $this->_data['active'] = 'marcas';
        $this->_data['title'] = 'Gerenciar Marcas';
    }
    
    public function index()
    {
        $this->_data['marcas'] = $this->marca->findAll();
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->view('marcas', $this->_data);
    }
    
    public function adicionar()
    {
        if($this->input->post()){
            $this->marca = $this->marca->post_to($this->input->post(), $this->marca);
            try{
                $this->marca->insert();
                $this->session->set_flashdata('msg', 'Marca salva com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('marcas');
            } catch (Exception $ex) {
                $this->session->set_flashdata('abrir', 'Marca');
                $this->session->set_flashdata('msg', 'Erro ao salvar marca:');
                $this->session->set_flashdata('erro', $this->marca->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['marca'] = $this->marca;
        
        $this->_data['sub_title'] = 'Adicionar nova marca';
        $this->_data['action'] = 'Adicionar'; //Como Add e Editar sao no mesmo form, essa var será usada no botao de submit
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_marca'] = $this->session->flashdata('dados');
        $this->view('marcas_form', $this->_data);
    }
    
    public function editar($id = null)
    {
        if(is_null($id)){
            admin_redirect('marcas');
        }
        if($this->input->post()){
            $this->marca = $this->marca->find($id);
            $this->marca = $this->marca->post_to($this->input->post(), $this->marca);
            try{
                $this->marca->update('idmarca', $this->marca->idmarca);
                $this->session->set_flashdata('msg', 'Marca atualizada com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('marcas');
            } catch (Exception $ex) {
                $this->session->set_flashdata('abrir', 'Marca');
                $this->session->set_flashdata('msg', 'Erro ao atualizar marca:');
                $this->session->set_flashdata('erro', $this->marca->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['marca'] = $this->marca->find($id);
        
        $this->_data['sub_title'] = 'Editar Marca';
        $this->_data['action'] = 'Atualizar';
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_marca'] = $this->session->flashdata('dados');
        $this->view('marcas_form', $this->_data);
    }
}
