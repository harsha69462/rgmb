<?php
 /**
  *
  */
 class ProfileModel extends CI_Model{

   public function getCred($email){
     $query = $this->db->query("select * from user_details where email='$email'");
     $row = $query->result_array();
     return $row;
  }

  public function updateRow($email, $phone, $address, $occupation, $salary, $cast, $religion, $hobbies, $requirements){
    $data = array(
      "phone" => $phone,
      "address" => $address,
      "occupation" => $occupation,
      "salary" => $salary,
      "cast" => $cast,
      "religion" => $religion,
      "hobbies" => $hobbies,
      "requirements" => $requirements,
    );
    $data = array_filter($data);
    $this->db->where('email', $email);
    $this->db->update('user_details', $data);
    return true;
  }


  public function getMatchId($str_arr){
    $data = [];
    for ($i=0; $i < count($str_arr)-1 ; $i++) {
      $id = $str_arr[$i];
      $query = $this->db->query("select * from user_details where userid='$id'");
      $row = $query->result_array();
      $data[$i] = $row[0];
    }

    return $data;

  }

 }



?>
