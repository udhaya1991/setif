<?php
class Activity_model extends CI_Model
{
    function Activity_model()
    {
        //parent::index();
        $this->load->database();
    }
    function getActivityService($service_type = '',$limit = 5)
    {
        $query = $this->db->query("SELECT DATE_FORMAT(activity_date,'%b %d %Y') as activity_date,activity_heading,LEFT(activity_desc , 200) as activity_desc,activity_place FROM `activity` WHERE `activity_type` LIKE '%".$service_type."%' ORDER BY activity_date DESC LIMIT 0,".$limit."");
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
            return false;
        }
    }
    function getActivity($year,$type)
    {   
        $types = $type !='All'?$type:'';
        $years = $year !='All'?$year:'2015';
        $query = $this->db->query("SELECT DATE_FORMAT(activity_date,'%b %d %Y') as activity_date,activity_heading,activity_desc,activity_place FROM `activity` WHERE year(`activity_date`) = '".$years."' AND `activity_type` LIKE '%".$types."%'");
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
            return false;
        }
    }
    function insertNewActivity($act)
    {
        $this->db->insert('activity',$act);
        return true;
    }
}