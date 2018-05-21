<?php

// https://www.codeigniter.com/userguide3/database/query_builder.html

class Ruta extends CI_Model{
   
    function obtenerListado($id = ""){
        if(!empty($id)){
            
            //SELECT * FROM ruta WHERE id="
            $query = $this->db->get_where('ruta', array('id' => $id));
            return $query->row_array();
        }else{
            
            //SELECT * FROM ruta
            $query = $this->db->get('ruta');
            return $query->result_array();
        }
    }
}
