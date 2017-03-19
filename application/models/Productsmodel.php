<?php

/*
 * By Haidar Mar'ie Email = haidarvm@gmail.com MProduct
 */
class Productsmodel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function getCollection($id) {
        $query = $this->db->get_where('collection', array('collection_id' => $id));
        return checkRes($query);
    }
    function getProducts($id) {
        $query = $this->db->get_where('product', array('collection_id' => $id));
        return checkRes($query);
    }

     public function CreateProduct($data){
        
        $this->db->insert('product', $data);       
        return $this->db->insert_id();  
            
    } 
    function getProduct($product_id) {
        $query = $this->db->get_where('product', array('product_id' => $product_id));
        return checkRes($query);
    } 
  
}