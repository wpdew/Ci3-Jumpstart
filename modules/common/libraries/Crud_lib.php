<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud_lib {
    
    function __construct($table=null)
    {
        $this->CI =& get_instance();
         
    }
    
    function check_install(){
        $seg = $this->CI->uri->segment(2);
        if ($seg!="install" && $seg!= "install_action") {
            if (file_exists('install.txt')) {
                redirect(base_url('install/install'), 'location');
            }
        }
    }
    
    function check_update(){
        $url = 'https://api.github.com/repos/pomerla/Ci3-Jumpstart/releases';
        $data = json_decode(file_get_contents($url));
        $data = $data['0'];
        $for_git = $data->name;
        $search  = array('v', 'V', '.');
        $replace = array('', '', '');
        $git_reliz = str_replace($search, $replace, $for_git);
        $current = str_replace($search, $replace, VERSION_ENGIN);
        
        if($git_reliz > $current){ echo 'New version available: <a href="https://badge.fury.io/gh/pomerla%2FCi3-Jumpstart" target="_blank">'.$for_git.'</a>';}
        else { echo 'Ci3-Jumpstart: '.VERSION_ENGIN;}
    }
    
    //выборка таблицы
    function get_table($table)
    {
        $query = $this->CI->db->get($table)->result_array(); 
        return $query;
    }
    
    //выборка одной строки 
    function get_row($where,$post,$table){
        $result = $this->CI->db->select('*')->where($where, $post)->get($table)->row_array();
        return $result;
    }
    
    function insert($table, $data){
        $this->CI->db->insert($table, $data);
    }
    
    function delete($table, $id){
        $query = $this->CI->db->where('id', $id)->delete($table);
        return $query;
    }

    function update($table,$id,$data){
        $query = $this->CI->db->where('id', $id)->update($table,$data);
        return $query; 
    }

    function select($table=null,$var=array(),$order=null)
    {    
        $query = $this->CI->db->select('*')
        ->where($var)
        ->order_by($order)
        ->get($table)
        ->result_array();
        return $query;  
    }
    
    
    
    
    
    

}

