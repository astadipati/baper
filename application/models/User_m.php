<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
    public function processLogin($userName=NULL, $password){
        $hasil=$this->db->query("SELECT * from v_users where username='$userName'");
        // $query = $this->db->get();
        return $hasil;
    }

    
}