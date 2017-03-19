<?php

/*
 * By Haidar Mar'ie Email = haidarvm@gmail.com MProduct
 */
class Usermodel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function getAllUser() {
        $query = $this->db->get("user");
        return checkRes($query);
    }
   
    function getUser($user_id) {
        $query = $this->db->get_where("customer", array('user_id'=>$user_id));
        return checkRow($query);
    }
    
   public function insertUser($data) {
      $this->db->insert('customer', $data);

    }

    public function login($data) {        
        $query = $this->db->get_where('customer', array(
            'email' => $data['email'],'password' => md5($data['password'])
        ));      
        if ($query->num_rows()==1) { 
                
           return $query->row(); 
        } else {
            return FALSE; 
        }
    }
}