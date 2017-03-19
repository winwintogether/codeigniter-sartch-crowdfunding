<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collections extends CI_Controller {	
	function __construct(){
  		parent::__construct();

  		$this->load->model('collectionsmodel');
  		
  	}

	public function show(){
        $data['all_collections']=$this->collectionsmodel->getAllCollections();        
        $this->load->view('Dashboard/collection_view',$data);
	}
	public function CreateCollection(){
      $data['collection_name'] = $this->input->post('collection_name', TRUE);
      $data['collection_description'] = $this->input->post('collection_description', TRUE);
      $data['collection_value'] = $this->input->post('collection_value', TRUE);
      

      $collection_id=$this->collectionsmodel->CreateCollection($data);

      chmod('./collections/', 0777);
      $path   = './collections/'.$collection_id;
      if (!is_dir($path)) { 
         mkdir($path, 0755, TRUE);
      }         

      $res['collection']=$this->collectionsmodel->getCollection($collection_id);
      echo(json_encode($res));
  }
}
