<?php
require "Base.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Base {

    function index_get(){
        $response = ["BaseMethod"=>"Products","Created"=>"Malangsoftware"];
        $this->response($response, HTTP_OK);
    }
}
