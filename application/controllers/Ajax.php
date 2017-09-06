<?php
/**
 * Description of Ajax
 *
 * @author Aluno
 */
class Ajax extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    //Busca os modelos pela marca
    public function buscar_modelos()
    {
        if($this->input->post()){
            $this->load->model('modelo_model', 'modelo');
            $modelos = $this->modelo->get_modelos_by_marca_array($this->input->post('marca'));
            echo json_encode($modelos);
        }
    }
    
    //Busca as versoes pelo modelo
    public function buscar_versoes()
    {
        if($this->input->post()){
            $this->load->model('versao_model', 'versao');
            $versoes = $this->versao->get_versoes_by_modelo_array($this->input->post('modelo'));
            echo json_encode($versoes);
        }
    }
}
