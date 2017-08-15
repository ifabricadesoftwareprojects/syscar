<?php
/**
 * Description of Testes
 *
 * @author IFSP
 */
class Testes extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $handle = fopen("C:\\wamp\\www\\syscar\\modelos-carro.csv", "r");
        $x=1;
        $this->load->model('modelo_model');
        while($data = fgetcsv($handle)){
            if($x > 1){
                $info = $data[0];
                $data = explode(";", $info);
                //die(print_r($data));
                $this->modelo_model->idmodelo = $data[0];
                $this->modelo_model->nomemodelo = $data[2];
                $this->modelo_model->marca_idmarca = $data[1];
                
                try{
                    $this->modelo_model->insert();
                    echo 'Modelo ' . $data[1] . ' salvo <br />';
                } catch (Exception $ex) {
                    echo 'Erro ao salvar modelo!' . $ex->getMessage();
                }
            }
            $x++;
        }
    }
    
    public function insert_admin()
    {
        $this->load->model('usuario_model', 'usuario');
        $this->usuario->nome = 'Administrador Master';
        $this->usuario->email = 'admin@admin.com.br';
        $this->usuario->senha = 'password';
        $this->usuario->perfil = 'Administrador';
        
        try{
            $this->usuario->insert_admin();
            echo 'Admin has been created';
        } catch (Exception $ex) {
            echo 'Error =( : ' . $ex->getMessage();
        }
    }
}
