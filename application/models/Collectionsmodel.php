<?php

/*
 * By Haidar Mar'ie Email = haidarvm@gmail.com MProduct
 */
class Collectionsmodel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//Get collection count    
    public function getCollectionCount(){
      $sql="select * from collection";
      $query=$this->db->query($sql);
      return $query->num_rows();
    }   

//Add  collections and Products in Popular Collections
    public function getPopularCollections(){       

        $sql="SELECT * FROM collection ORDER BY visitors DESC LIMIT 0,3";
        $query=$this->db->query($sql);
        return checkRes($query);
    }

     public function getPopularProducts(){        
        $sql="SELECT product.* FROM product RIGHT JOIN (SELECT * FROM collection ORDER BY collection.visitors DESC LIMIT 3) a ON a.collection_id = product.collection_id";
        $query=$this->db->query($sql);
        return checkRes($query);
    }

//Add  collections and Products in Just Added Collections
    public function getJustaddedCollections(){         
        $sql="SELECT * FROM collection ORDER BY create_time DESC LIMIT 0,3";
        $query=$this->db->query($sql);
        return checkRes($query);      
    } 
    public function getJustaddedProducts(){         
        $sql="SELECT product.* FROM product RIGHT JOIN (SELECT * FROM collection ORDER BY collection.create_time DESC LIMIT 3) a ON a.collection_id = product.collection_id";
        $query=$this->db->query($sql);
        return checkRes($query);      
    } 

//Add  collections and Products in All Collections 
    public function getCollectionLists($limit){
        $sql="SELECT * FROM collection  LIMIT $limit,3";
        $query=$this->db->query($sql);
        return checkRes($query);               
    }
    
    public function getProductLists($limit){

        $sql="SELECT product.* FROM product RIGHT JOIN (SELECT * FROM collection LIMIT ".$limit.", 3) a ON a.collection_id = product.collection_id";
        $query=$this->db->query($sql);
        return checkRes($query);                 
    } 


    public function getAllProducts(){
        $this->db->join('collection', 'collection.collection_id = product.collection_id');
        $query = $this->db->get('product');
        return checkRes($query);        
    } 

    public function getAllCollections(){
        $sql="select * from collection";
        $query=$this->db->query($sql);  
        return checkRes($query);      
    }
    public function CreateCollection($data){
        
        $this->db->insert('collection', $data);       
        return $this->db->insert_id();  
       // return $res;        
    } 
    function getCollection($id) {
        $query = $this->db->get_where('collection', array('collection_id' => $id));
        return checkRes($query);
    } 
   
}