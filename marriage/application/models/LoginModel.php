<?php
 /**
  *
  */
 class LoginModel extends CI_Model{

   public function checkCred($email, $pass){

    $query = $this->db->query("select username, password from admin_login where username='$email' and password='$pass'");
    $var1 = $query->result_array();
    if(count($var1) > 0){
      return true;
    } else{
      return false;
    }
  }

 }


?>
