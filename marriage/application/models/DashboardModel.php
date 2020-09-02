<?php
 /**
  *
  */
 class DashboardModel extends CI_Model{
   public function getUserData(){
     $query = $this->db->query("select * from user_details");
     $row = $query->result_array();
     return $row;
   }


   public function getMaleData(){
     $query = $this->db->query("select * from user_details where gender='male'");
     $row = $query->result_array();
     return $row;
   }


   public function getFemaleData(){
     $query = $this->db->query("select * from user_details where gender='female'");
     $row = $query->result_array();
     return $row;
   }
 }
?>
