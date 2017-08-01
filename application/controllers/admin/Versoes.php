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
        $this->load->model('versao_model', 'versao');
        $this->load->model('modelo_model', 'modelo');
        $this->load->model('marca_model', 'marca');
        $this->load->helper('form');
        
        $this->_data['active'] = 'versoes';
        $this->_data['title'] = 'Gerenciar Versao';
    }
    
    public function index()
    {
        $this->_data['versoes'] = $this->versao->findAll();
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->view('versoes', $this->_data);
    }
    
    public function adicionar()
    {
        if($this->input->post()){
            $this->versao = $this->modelo->post_to($this->input->post(), $this->versao);
            try{
                $this->versao->save();
                $this->session->set_flashdata('msg', 'Versao salva com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('versoes');
            } catch (Exception $ex) {
                $this->session->set_flashdata('msg', 'Erro ao salvar versao:' . $this->users->get_erro());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['versao'] = $this->versao;
        $this->_data['marcas'] = $this->marca->get_marcas_array();
        
        $this->_data['sub_title'] = 'Adicionar novo versao';
        $this->_data['action'] = 'Adicionar'; //Como Add e Editar sao no mesmo form, essa var será usada no botao de submit
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
                $this->versao->save();
                $this->session->set_flashdata('msg', 'Modelo atualizada com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('versoes');
            } catch (Exception $ex) {
                $this->session->set_flashdata('msg', 'Erro ao atualizar versao:' . $this->users->get_erro());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['versao'] = $this->modelo->find($id);
        
        $this->_data['sub_title'] = 'Editar Versao';
        $this->_data['action'] = 'Atualizar';
        $this->view('versao_form', $this->_data);
    }
}
