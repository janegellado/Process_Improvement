<?php

class MR_model extends CI_Model {
    private $table = 'mr';
    private $property = 'property';
    
    function createproperties($mrRecord){
        $this->db->insert($this->property, $mrRecord);
    }
    
    function read1($condition=null){
        $this->db->select('*');
        $this->db->from($this->mr);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }
    
    function read($id){
        $this->db->select('*');
        $this->db->from($this->property);
        foreach($id as $i){
            $new = $i['mr'];
        }
        $where = "property_no != '$new'";
        $this->db->where($where);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function update_mr($property_no, $newRecord){
        $this->db->where('property_no', $property_no);
        $this->db->replace($this->table,$newRecord);
    }

    function createproperty($newRecord){
        $this->db->insert($this->table, $newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }

    function count(){
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->num_rows();
    }

    function readmr(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
}
?>