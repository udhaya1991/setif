<?php
class Admin_model extends CI_Model
{
    function Admin_model()
    {
        $this->load->database();
    }
    function checkUser($id,$pass)
    {   
        
        $query = $this->db->query("SELECT * FROM members WHERE membershipid='".$id."' AND password='".$pass."' AND member_type='admin'");
        if ($query->num_rows() > 0)
        {  
            return true;
        }
        else
        {
            return false;
        }
    }
    function getMemberList($membershipid,$name)
    {
        $query = $this->db->query("SELECT * FROM members WHERE membershipid LIKE '%".$membershipid."%' AND fname LIKE '%".$name."%' AND member_type='user' LIMIT 0,10");
        if ($query->num_rows() > 0)
        {  
           foreach($query->result_array() as $row) 
           {
            $data[] = $row;
           }
           return $data;
        }
        else
        {   
            $data = array();
            return $data;
        }
    }
    function getDeleteEntry($membershipid)
    {   
        $this->db->query("DELETE FROM `members` WHERE membershipid='".$membershipid."'");
        return true;
    }
    function getMember($membershipid)
    {
        $query = $this->db->query("SELECT * FROM members WHERE membershipid LIKE '".$membershipid."' AND member_type='user'");
        if ($query->num_rows() > 0)
        {  
           foreach($query->result_array() as $row) 
           {
            $data[] = $row;
           }
           return $data;
        }
    }
    function updateMember($membershipid,$member_details)
    {
        $this->db->where('membershipid', $membershipid);
        $this->db->update('members', $member_details);
        return true;
    }
}
?>

