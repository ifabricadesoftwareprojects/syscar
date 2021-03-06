<?php
/**
 * Description of Marca
 *
 * @author alexandre and jabes
 */
class Modelos extends MY_Controller {
    
    protected $_template_folder = 'admin';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        //Verifica "porcamente" se o usuário está autenticado!!!=)
        if (!isset($this->session->token)) {
            redirect('admin/login');
        }
        
        $this->load->model('modelo_model', 'modelo');
        $this->load->model('marca_model', 'marca');
        $this->load->helper('form');
        
        $this->_data['active'] = 'modelos';
        $this->_data['title'] = 'Gerenciar Modelos';
    }
    
    public function index()
    {
        $this->_data['modelos'] = $this->modelo->get_modelos($this->input->get('q'));
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->view('modelos', $this->_data);
    }
    
    public function adicionar()
    {
        if($this->input->post()){
            $this->modelo = $this->modelo->post_to($this->input->post(), $this->modelo);
            try{
                $this->modelo->insert($this->input->post('confirmar'));
                $this->session->set_flashdata('msg', 'Modelo salva com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('modelos');
            } catch (Exception $ex) {
                $this->session->set_flashdata('abrir', 'Modelo');
                $this->session->set_flashdata('msg', 'Erro ao salvar modelo:');
                $this->session->set_flashdata('erro', $this->modelo->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
        }
        $this->_data['modelo'] = $this->modelo;
        $this->_data['marcas'] = $this->marca->get_marcas_array();
        
        $this->_data['sub_title'] = 'Adicionar novo modelo';
        $this->_data['action'] = 'Adicionar'; //Como Add e Editar sao no mesmo form, essa var será usada no botao de submit
        
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_modelo'] = $this->session->flashdata('dados');
        
        $this->view('modelos_form', $this->_data);
    }
    
    public function editar($id = null)
    {
        if(is_null($id)){
            admin_redirect('modelos');
        }
        if($this->input->post()){
            $this->modelo = $this->modelo->find($id);
            $this->modelo = $this->modelo->post_to($this->input->post(), $this->modelo);
            try{
                $this->modelo->update('idmodelo', $this->modelo->idmodelo, $this->input->post('confirmar'));
                $this->session->set_flashdata('msg', 'Modelo atualizada com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                admin_redirect('modelos');
            } catch (Exception $ex) {
                
                $this->session->set_flashdata('abrir', 'Modelo');
                $this->session->set_flashdata('msg', 'Erro ao atualizar usuario:');
                $this->session->set_flashdata('erro', $this->modelo->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
                
            }
        }
        $this->_data['modelo'] = $this->modelo->find($id);
        $this->_data['marcas'] = $this->marca->get_marcas_array();
        
        $this->_data['sub_title'] = 'Editar Modelo';
        $this->_data['action'] = 'Atualizar';
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_modelo'] = $this->session->flashdata('dados');
        $this->view('modelos_form', $this->_data);
    }
    
    public function buscar()
    {
        if($this->input->post()){
            $modelos = $this->modelo->get_modelos_by_marca_array($this->input->post('marca'));
            echo json_encode($modelos);
        }
    }
}
