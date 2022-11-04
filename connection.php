<?php
 
 $conn = mysqli_connect("localhost", "root", "", "mybd") or die("connection is fail :");

 /*if($conn){
  echo "connect is successfull";
 }else{
  echo "connect is fail";
 }*/

 $sql = "INSERT INTO MyGuests (Fname, Lname, email)
 VALUES ('MOhit', 'Sharma', '1199mohitsharmagmail.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
