<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproducts extends CI_Model{

    function find($filter){
        if($filter == true){
            $this->set_filter();
            $products_tbl = products(get_exclude());
            $fields=make_fields($products_tbl);
            $this->db->select($fields);
            $q=$this->db->get("produk_data");
            return $q->result();
        }
    }
    function set_filter(){
        return "";
    }
      
}