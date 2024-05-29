<?php
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "project";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 $name=$_POST["firstname"];
 $email=$_POST["email"];
 $messs=$_POST["message"];

 
 $sql = "INSERT INTO user_info(user_name,user_email,user_mess)
 VALUES ('$name', '$email', '$messs')";
 
 if ($conn->query($sql) === TRUE) {
   header("location:http://localhost/prabh/Portfolio-Website-Template-main/index.php");
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
 ?>

