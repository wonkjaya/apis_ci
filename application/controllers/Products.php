<?php
require "Base.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Base {

    function index_get(){
        $response = ["BaseMethod"=>"Products","Created"=>"Malangsoftware"];
        $this->response($response, HTTP_OK);
    }

    function find_get($filter=false){
        $this->load->model("mproducts");
        $response = $this->mproducts->find($filter);
        $this->response($response, HTTP_OK);
    }

    function findone_get($filter=true){
        
    }

    function insert_post(){
        
    }

    function insertmany_post(){
        
    }

    function update_put(){
        
    }

    function remove_delete(){
        
    }
}
