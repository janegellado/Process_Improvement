<?php

class Employee_model extends CI_Model {
    private $table = 'employee';
    private $leavecredits ='credits';
    private $super = 'supervisor';
    
    function createemployee($employeeRecord){

        $this->db->insert($this->table, $employeeRecord);
        $data = array( 
        'id'=>$_POST['employeeID'],
        'username'=>$_POST['employeeID'],
        'type'=>$_POST['type'],
        'password'=> '12345'
        );
        $this->db->insert('login', $data);
    }
    
    function createsupervisor($employeeRecord){
        $this->db->insert($this->table, $employeeRecord);
        $data = array( 
        'id'=>$_POST['employeeID'],
        'sv_firstname'=>$_POST['fname'],
        'sv_lastname'=>$_POST['lname'],
        'sv_middlename'=> $_POST['mname']
        );
        $this->db->insert('supervisor', $data);
    }

    function read($condition=null){
        $this->db->select('*');
        $this->db->from('login');
        if(isset($condition))
            $this->db->where('username', $condition);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

      function read_employees($condition=null){
        $this->db->select('*');
        $this->db->from('employee');
        if(isset($condition))
            $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

      function remployee($id){
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('employeeID', $id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function remployees($id){
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('supervisorID', $id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }


    function update_employee($employeeID,$newRecord){
        $this->db->where('employeeID', $employeeID);
        $this->db->update($this->table,$newRecord);
    }
    
    function del($where_array){
        
        $this->db->delete($this->table,$where_array);
    }

    function count(){
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    $query = $this->db->query('SELECT * FROM employee');
    return $query->num_rows();

    }

    function users()
    {
        $query = $this->db->get('employee');
        return $query->result();
    }
    function data($employeeID)
    {
        $query = $this->db->get_where('employee', array('employeeID' => $employeeID));
        return $query->result();
    }

    function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);     
           $query = $this->db->get('login');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }
   
public function changepassword($data,$arg)
    {
         $this->db->update('register', $data,"`id` = $arg");
            
    }
    
    public function error($msg)
    {
        return '<div id="error">'.$msg.'</div>';
    }

public function supervisors(){
        $this->db->select("*, CONCAT(sv_lastname, ',', sv_firstname) AS username");
        $this->db->from('supervisor');
        $query = $this->db->get();
        if($query -> num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }   

    public function passwordcheck($id){
        $this->db->select('password');
        $this->db->from('employee');
        $this->db->where('employeeID', $id);
        $query = $this->db->get();
        if($query -> num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    public function updatepassword($new, $id){
        $this->db->set('password', $new);
        $this->db->where('employeeID', $id);
        $this->db->update('employee');

        $this->db->set('password', $new);
        $this->db->where('id', $id);
        $this->db->update('login');
    }

    public function createleavecredits($leaveCreditsRecord){

        $this->db->insert($this->leavecredits, $leaveCreditsRecord);
       
    }

    function readcredits(){
        $this->db->select('*');
        $this->db->from('credits');
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function read_credits($condition=null){
        $this->db->select('*');
        $this->db->from('credits');
        if(isset($condition))
            $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function update_credits($employeeID, $newRecord){
        $this->db->where('employeeID', $employeeID);
        $this->db->update($this->leavecredits,$newRecord);
    }
    
    function del_credits($where_array){
        
        $this->db->delete($this->leavecredits,$where_array);
    }

    public function getSV($id){
        $this->db->select('*');
        $this->db->from('supervisor');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    public function getinfo($employeeID){
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('employeeID', $employeeID);
        $query = $this->db->get();
        if($query -> num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

}

