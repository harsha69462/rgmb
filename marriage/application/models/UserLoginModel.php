<?php
 /**
  *
  */
 class UserLoginModel extends CI_Model{
   public function user_check($email, $pass){
     $query = $this->db->query("select email, password from user_details where email='$email'");
     $row = $query->result_array();
     return $row;
   }

 }


?>
