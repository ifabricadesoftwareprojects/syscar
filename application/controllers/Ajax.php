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
    
    public function upload_foto($idanuncio)
    {
        if($this->input->post()){
            $config["upload_path"] = "assets/fotos/anuncio" . $idanuncio . "/";
            $config["allowed_types"] = "gif|jpg|png";
            $config["overwrite"] = TRUE;
            $this->load->library("upload", $config);
            //em caso de sucesso no upload
            if ($this->upload->do_upload('foto')) {
                $data['msg'] = site_url($config["upload_path"] . $this->upload->file_name);
                $data['sucesso'] = true;
            }
            else{
                $data['sucesso'] = false;
                $data['msg'] = $this->upload->display_errors();
            }
            echo json_encode($data);
        }
    }
}
