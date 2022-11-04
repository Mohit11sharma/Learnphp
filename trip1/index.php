<?php
$insert = false;
if(isset($_POST['name'])){

 
 
$con = mysqli_connect("localhost", "root", "mysql", "trip1") or die("connection failed");
//echo " seccess connecting to the db";
$name= $_POST['name'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$desc= $_POST['desc'];
$sql = "INSERT INTO `trip1`.`trip2` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;

if($con->query($sql) == true){
   // echo "successfully inserted";
   $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WElcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="hr.jpg" alt="IIT kharagpur" >
    <div class="container">
        <h1><i>WElcome to SR Group of Institute Trip Form</i></h1>
        <p><i>Enter your details and submit thid form to confirm your participation in the trip</i></p>
        <?php
        if($insert == true){
            echo "<p class='submitMsg'><i>Thanks for submitting your form. We are happy tp see you joining us for the trip</i></p>";
        }
        ?>
        <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Etner any other information here"></textarea>
        <button class="btn" name="submit">Submit</button>
       
    </form>
    </div>

    <script src="index.js"></script>
</body>
</html>
