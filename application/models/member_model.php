<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Member_model extends CI_Model
{
    function Member_model()
    {
        //parent::index();
        $this->load->database();
    }
    
    function getMemberAll($limit=10)
    {   
        $query = $this->db->query('SELECT fname,lname,membershipid,occupation as occupation FROM members ORDER BY id DESC LIMIT 0,'.$limit.'');
        if ($query->num_rows() > 0)
        {  
           foreach($query->result_array() as $row) 
           {
            $data[] = $row;
           }
           return $data;
        }
    }
    function getMemberAllColumn($limit=10)
    {
       $query = $this->db->query('SELECT * FROM members ORDER BY id ASC LIMIT 0,'.$limit.'');
        if ($query->num_rows() > 0)
        {  
           foreach($query->result_array() as $row) 
           {
            $data[] = $row;
           }
           return $data;
        } 
    }
    function insertMember($memberdetails)
    {   
       $this->db->insert('members',$memberdetails);
       return true;
    }
    function checkMemberAvailability($number)
    {
       $query = $this->db->query("SELECT membershipid as membershipid FROM members where phone='".$number."'");
       if ($query->num_rows() > 0)
        {
            return $query->row()->membershipid;
        }
        else 
        {
            return false;
        } 
    }
}

