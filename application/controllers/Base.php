<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Base extends REST_Controller {

	function version_get(){
		$arrayJson = array("version"=>"0.1");
		$this->response($arrayJson, HTTP_OK);
	}
}
