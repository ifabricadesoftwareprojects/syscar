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
        $this->view('meus_dados', $this->_data);
    }
}
