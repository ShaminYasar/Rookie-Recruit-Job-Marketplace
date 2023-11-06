<?php

if($_SERVER["REQUEST METHOD"]=='POST'){
  
 $full_name=$_POST["full_name"];
 $dob=$_POST["dob"];
 $gender=$_POST["gender"];
 $address=$_POST["address"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];

 $resume = $_FILES["resume"];
 $resume_name = $resume["name"];
 $resume_tmp_name = $resume["tmp_name"];

 $upload_directory = "uploads/";
 move_uploaded_file($resume_tmp_name, $upload_directory . $resume_name);
 header('location: homepage.php');




}

?>