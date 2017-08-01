<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of MY_Controller
 *
 * @author Rafael W. Pinheiro
 */
class MY_Controller extends CI_Controller {
    
    /**
     * Pasta que recebe as views da APP (Padrão do CI é "views")
     * @var String 
     */
    protected $_views_folder = 'views';
    
    /**
     * Sufixo do nome das views. Se nao existir arquivo com o sufixo, tenta procurar sem o sufixo.
     * @var String 
     */
    protected $_sufix_view = '_view';
    
    /**
     * Pasta do template. (Ex: Admin, Conta, Default)
     * @var String 
     */
    protected $_template_folder = '';
    
    
    /**
     * Construtor da classe
     */
    public function __construct() {
        parent::__construct();
    }
    
    
    protected function is_request($param){
        if(strtolower($param) == strtolower($_SERVER['REQUEST_METHOD'])){
            return true;
        }
        return false;
    }
    
    /**
     * Faz a chamada da view. Se existir um arquivo de template, carrega. Se não, executa a view pelo método nativo do CI
     * @param String $name Nome da view
     * @param Array $data Dados passados a view
     * @param String $template_file Nome do arquivo do template
     */
    protected function view($name, $data = array(), $template_file = 'template'){        
        $template = ($this->_template_folder == '' ? '' : $this->_template_folder . DIRECTORY_SEPARATOR) . $template_file;
        $template_path = APPPATH . $this->_views_folder . DIRECTORY_SEPARATOR . $template . '.php';
        $view = ($this->_template_folder == '' ? '' : $this->_template_folder . DIRECTORY_SEPARATOR) . $name . $this->_sufix_view;

        if(!file_exists(APPPATH . $this->_views_folder . '/' . $view . '.php')){
            $view = $this->_template_folder . '/' . $name;
        }
        
        if(file_exists($template_path)){
            $this->template->load($template, $view, $data);
        }
        else{
            $this->load->view($view, $data);
        }
    }
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */