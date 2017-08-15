<?php
/**
 * Description of Marca
 *
 * @author alexandre and jabes
 */
class Versoes extends MY_Controller {
    
    protected $_template_folder = 'admin';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        //Verifica "porcamente" se o usuário está autenticado!!!=)
        if (!isset($this->session->token)) {
            redirect('admin/login');
        }
        
        $this->load->model('versao_model', 'versao');
        $this->load->model('modelo_model', 'modelo');
        $this->load->model('marca_model', 'marca');
        $this->load->helper('form');
        
        $this->_data['active'] = 'versoes';
        $this->_data['title'] = 'Gerenciar Versão';
    }
    
    public function index()
    {
        $this->_data['versoes'] = $this->versao->get_versoes();
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->view('versoes', $this->_data);
    }
    
    public function adicionar()
    {
        if($this->input->post()){
            $this->versao = $this->versao->post_to($this->input->post(), $this->versao);
            try{
                $this->versao->insert($this->input->post('confirmar'));
                $this->session->set_flashdata('msg', 'Versao salva com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('versoes');
            } catch (Exception $ex) {               
                $this->session->set_flashdata('abrir', 'Versao');
                $this->session->set_flashdata('msg', 'Erro ao salvar versao:');
                $this->session->set_flashdata('erro', $this->versao->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['versao'] = $this->versao;
        $this->_data['marcas'] = $this->marca->get_marcas_array();
        $this->_data['modelos'] = array();
        
        $this->_data['sub_title'] = 'Adicionar novo versão';
        $this->_data['action'] = 'Adicionar'; //Como Add e Editar sao no mesmo form, essa var será usada no botao de submit
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_versao'] = $this->session->flashdata('dados');
        $this->view('versoes_form', $this->_data);
    }
    
    public function editar($id = null)
    {
        if(is_null($id)){
            admin_redirect('versoes');
        }
        if($this->input->post()){
            $this->versao = $this->versao->find($id);
            $this->versao = $this->versao->post_to($this->input->post(), $this->versao);
            try{
                $this->versao->update('idversao', $this->versao->idversao, $this->input->post('confirmar'));
                $this->session->set_flashdata('msg', 'Versao atualizada com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('versoes');
            } catch (Exception $ex) {
   
                $this->session->set_flashdata('abrir', 'Versao');
                $this->session->set_flashdata('msg', 'Erro ao atualizar versao:');
                $this->session->set_flashdata('erro', $this->versao->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['versao'] = $this->versao->get_versao_by_id($id);
        $this->_data['marcas'] = $this->marca->get_marcas_array();
        $this->_data['modelos'] = $this->modelo->get_modelos_by_marca_array($this->_data['versao']->marca_idmarca);
        
        $this->_data['sub_title'] = 'Editar Versão';
        $this->_data['action'] = 'Atualizar';
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_versao'] = $this->session->flashdata('dados');
        
        $this->view('versoes_form', $this->_data);
    }
}
