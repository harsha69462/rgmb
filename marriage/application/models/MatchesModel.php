<?php
 /**
  *
  */
 class MatchesModel extends CI_Model{
   public function match($male_email, $female_email){
     $query_male = $this->db->query("select mymatches_id from user_details where email='$male_email'");
     $row1 = $query_male->result_array();
     $male_id .= $row1[0]['mymatches_id'];
     
     $query_male = $this->db->query("select mymatches_id from user_details where email='$female_email'");
     $row1 = $query_male->result_array();
     $female_id .= $row1[0]['mymatches_id'];

     $query_male = $this->db->query("select email, userid from user_details where email='$male_email'");
     $male_row = $query_male->result_array();

     $query_female = $this->db->query("select email, userid from user_details where email='$female_email'");
     $female_row = $query_female->result_array();

     $male_id .= $female_row[0]['userid'].",";
     $female_id .= $male_row[0]['userid'].",";

    $data = array("mymatches_id" => $female_id);
    $data = array_filter($data);
    $this->db->where("email", $female_email);
    $this->db->update("user_details", $data);

    $data = array("mymatches_id" => $male_id);
    $data = array_filter($data);
    $this->db->where("email", $male_email);
    $this->db->update("user_details", $data);

    return true;
   }

 }


?>
