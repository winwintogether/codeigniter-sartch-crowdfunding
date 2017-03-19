
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

  	function __construct(){
  		parent::__construct();

  		$this->load->model('productsmodel');
  		
  	}

    public function show(){   
         $collection_id = $this->input->get('collection_id', TRUE);
         $data['collection']=$this->productsmodel->getCollection($collection_id);
         $data['products']=$this->productsmodel->getProducts($collection_id);

         $this->load->view('User/Product/products_view', $data);    
    }

	
}
