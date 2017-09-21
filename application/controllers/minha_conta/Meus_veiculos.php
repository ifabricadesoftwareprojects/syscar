<?php
/**
 * Description of Meus_dados
 *
 * @author Aluno
 */
class Meus_veiculos extends MY_Controller {
    protected $_template_folder = 'site';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        if(!$this->session->token){
            redirect('');
        }
        $this->load->model('anuncio_model', 'anuncio');
        $this->load->model('usuario_model', 'usuario');
        $this->load->helper('array');
    }
    
    public function index()
    {
        $this->_data['anuncios'] = $this->anuncio->get_anuncios_by_usuario($this->usuario->get_id_by_token($this->session->token));
        $this->_data['msg'] = $this->session->flashdata('msg');
        $this->view('meus_veiculos', $this->_data);
    }
    
    public function adicionar()
    {
        if($this->input->post()){
            $this->anuncio = $this->anuncio->post_to($this->input->post(), $this->anuncio);
            $this->anuncio->usuario_idusuario = $this->usuario->get_id_by_token($this->session->token);
            $this->anuncio->versao_idversao = $this->input->post('versao');
            try{
                $this->anuncio->inserir_anuncio($this->input->post('opcionais'));
                $this->session->set_flashdata('msg', 'Anúncio salvo com sucesso');
                redirect('minha_conta/meus_veiculos');
            } catch (Exception $ex) {
                $this->session->set_flashdata('msg', $ex->getMessage());
                $this->session->set_flashdata('erro', $this->anuncio->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                redirect('minha_conta/meus_veiculos/adicionar');
            }
        }
        $this->load->helper('form');
        $this->load->model('marca_model', 'marca');
        $this->load->model('modelo_model', 'modelo');
        $this->load->model('opcional_model', 'opcional');
        
        $this->_data['marcas'] = $this->marca->get_marcas_array();
        $this->_data['modelos'] = array();
        $this->_data['versoes'] = array();
        $this->_data['opcionais'] = $this->opcional->get_opcionais();
        
        $this->_data['anuncio'] = $this->anuncio;
        
        $this->_data['msg'] = $this->session->flashdata('msg');
        $this->_data['erros'] = $this->session->flashdata('erro');
        
        $this->view('meus_veiculos_form', $this->_data);
    }
    
    public function editar($idanuncio = null){
        if(is_null($idanuncio)){
            $this->session->set_flashdata('msg', 'Anúncio não encontrado');
            redirect('minha_conta/meus_veiculos');
        }
        
        $this->_data['anuncio'] = $this->anuncio->get_anuncio_by_id($idanuncio, $this->usuario->get_id_by_token($this->session->token));
        if(!$this->_data['anuncio']){
            $this->session->set_flashdata('msg', 'Anúncio não encontrado');
            redirect('minha_conta/meus_veiculos');
        }
        
        $this->load->helper('form');
        $this->load->model('marca_model', 'marca');
        $this->load->model('modelo_model', 'modelo');
        $this->load->model('versao_model', 'versao');
        $this->load->model('opcional_model', 'opcional');
        
        $this->_data['versoes'] = $this->versao->get_versoes_by_modelo_array($this->_data['anuncio']->modelo_idmodelo);
        $this->_data['marcas'] = $this->marca->get_marcas_array();
        $this->_data['modelos'] = $this->modelo->get_modelos_by_marca_array($this->_data['anuncio']->marca_idmarca);
        $this->_data['opcionais'] = $this->opcional->get_opcionais();
        $this->_data['opcionais_anuncio'] = $this->anuncio->get_opcionais_anuncio_array($idanuncio);
        
        $this->_data['msg'] = $this->session->flashdata('msg');
        $this->_data['erros'] = $this->session->flashdata('erro');
        
        $this->view('meus_veiculos_form', $this->_data);
    }
}
