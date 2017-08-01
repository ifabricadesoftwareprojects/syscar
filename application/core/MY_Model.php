<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of MY_Model
 *
 * @author Rafael W. Pinheiro
 */
class MY_Model extends CI_Model {
    protected $table;
    protected $pk;
    protected $model;
    protected $erro;
    
    public function __construct() {
        parent::__construct();
        $this->model = get_class($this);
    }
    
    public function get_erro()
    {
        return $this->erro;
    }
    
    public function post_to($post, $obj = null)
    {
        if(!is_array($post) OR count($post) == 0){
            return null;
        }
        if($obj != null AND $this->model != get_class($obj)){
            return null;
        }
        
        $instance = $this->model;
        $obj = ($obj == null ? new $instance() : $obj);
        foreach ($post as $key => $value){
            if(property_exists($instance, $key)){
                $obj->$key = $value;
            }            
        }
        return $obj;
    }
    
    public function insert()
    {
        $res = $this->db->insert($this->table, $this);
        
        if(!$res){
            $this->erro = $this->db->error();
            throw new Exception($this->erro['message']);
        }
        
        return $res;
    }
    
    public function update($field, $value)
    {
        $res = $this->db->update($this->table, $this, array($field => $value));
        
        if(!$res){
            $this->erro = $this->db->error();
            throw new Exception($this->erro['message']);
        }
        
        return $res;
    }
    
    public function find($pk, $fields = '*')
    {
        return $this->db
                ->select($fields)
                ->from($this->table)
                ->where($this->pk, $pk)
                ->get()
                ->row(0, $this->model);
    }
    
    public function findBy($param, $value, $fields = '*')
    {
        return $this->db
                ->select($fields)
                ->from($this->table)
                ->where($param, $value)
                ->get()
                ->custom_result_object($this->model);
    }
    
    public function findAll($limit = null, $offset = null)
    {
        return $this->db
                ->from($this->table)
                ->limit($limit)
                ->offset($offset)
                ->get()
                ->custom_result_object($this->model);
    }
}
