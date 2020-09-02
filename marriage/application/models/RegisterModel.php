<?php
 /**
  *
  */
 class RegisterModel extends CI_Model{

   public function addRow($fullname, $password, $email, $phone, $dob, $age, $gender){
     $data = array(
     "fullname" => $fullname,
     "email" => $email,
     "password" => $password,
     "phone" => $phone,
     "gender" => $gender,
     "dob" => $dob,
     "age" => $age
     );
     $this->db->insert("user_details",$data);
     return true;
   }

   public function loadpropic($email, $pic){

     $this->db->where("email", $email);

     $data = array('propic' => $pic, );
     
     $this->db->insert("user_details", $data);

   }

 }
?>
