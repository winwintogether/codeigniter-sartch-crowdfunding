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
		 $this->load->view('Dashboard/product_view',$data);

	}
	public function CreateProduct(){

	    $data['collection_id'] = $this->input->post('collection_id', TRUE);
      $data['product_name'] = $this->input->post('product_name', TRUE);
      $data['product_description'] = $this->input->post('product_description', TRUE);
      $data['product_image']='';     
      $product_id='';
     
       $config['upload_path'] = './collections/'.$data['collection_id'].'/';
       $config['allowed_types'] = 'gif|jpg|png';

       $config['max_size'] = '100000';
       $config['max_width'] = '10000';
       $config['max_height'] = '10000';
     //  $config['max_execution_time'] = '7200';

       $error = '';
       $udata = '';
       $this->load->library('upload');
       $this->upload->initialize($config);

       if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());            
          
          echo($this->upload->display_errors());

        } else {
            $udata = array('upload_data' => $this->upload->data());   
            $data['product_image'] = $udata['upload_data']['file_name'];           
            $product_id=$this->productsmodel->CreateProduct($data);
            echo(".................upload_success");                             
        }

    /* $res['product']=$this->productsmodel->getProduct($product_id);
     echo(json_encode($res));*/
     
  }
}
