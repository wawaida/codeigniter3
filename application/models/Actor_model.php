<?php

class Actor_model extends CI_Model {

    // list all actor [{},{}]
    function listing(){
        $query = $this->db->get('actor');
        return $query->result_array();
    }

    function insert($data){
        $this->db->insert('actor', $data);
    }

}