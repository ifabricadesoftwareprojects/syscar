<?php
/**
 * Description of Meus_dados
 *
 * @author Aluno
 */
class Meus_dados extends MY_Controller {
    protected $_template_folder = 'site';
    protected $_data = array();
    
    public function __construct() {
        parent::__construct();
        if(!$this->session->token){
            redirect('');
        }
        $this->load->model('usuario_model', 'usuario');
    }
    
    public function index()
    {
        $usuario = $this->usuario->findBy('token', $this->session->token);
        //Apesar de a busca pelo token retornar apenas 1 registro, o método findBy sempre
        //retorna um array de objetos. Nesse caso, ele retorna o array com apenas 1 posicao (Pos 0)
        $this->_data['usuario'] = $usuario[0];
        $this->_data['msg'] = $this->session->flashdata('msg');
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_usuario'] = $this->session->flashdata('dados'); 
        $this->view('meus_dados', $this->_data);
        
    }
    public function editar()
    { 
        if($this->input->post()){
            $this->usuario = $this->usuario->find($this->usuario->get_id_by_token($this->session->token));
            $post = $this->input->post();
            $changed_password = true;
            if($post["senha"] == "")
            {
                unset($post["senha"]);
                unset($post["confirmar"]);
                $changed_password = false;
            }
            $this->usuario = $this->usuario->post_to($post, $this->usuario);
            try{
                $this->usuario->update('idusuario', $this->usuario->idusuario, $this->input->post('confirmar'), $changed_password);
                $this->session->set_flashdata('msg', 'Usuario atualizado com sucesso');
                $this->session->set_flashdata('msgstatus', 'success');
                $this->session->set_userdata(
                        array(
                            'nome'   => $this->usuario->nome
                        )
                    );
            } catch (Exception $ex) {
                $this->session->set_flashdata('msg', 'Erro ao atualizar usuario:');
                $this->session->set_flashdata('erro', $this->usuario->get_erro());
                $this->session->set_flashdata('dados', $this->input->post());
                $this->session->set_flashdata('msgstatus', 'error');
            }
            redirect('minha_conta/meus_dados');
        }
        $this->_data['usuario'] = $this->usuario->find($this->usuario->get_id_by_token($this->session->token));
        
        $this->_data['alert_message'] = alert_message($this->session->flashdata('msg'), $this->session->flashdata('msgstatus'));
        $this->_data['erros'] = $this->session->flashdata('erro');
        $this->_data['dados_usuario'] = $this->session->flashdata('dados');
        $this->view('home', $this->_data);
    }
}
