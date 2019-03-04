<?php
$username = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
// echo $username;
// echo $email;
// echo $password;

// $username= stripcslashes($username);
// $password= stripcslashes($password);
// $username= mysql_real_escape_string($username);
// $password= mysql_real_escape_string($password);

$conn = mysqli_connect('localhost', 'root', '','newone');

if($conn->connect_error){
    echo 'Error : ' .  $conn->connect_error;
}
$query = "INSERT INTO users (`user`,`email`,`pass`)  VALUES ('" . $username .  "', '" .$email. "', '" . $pass . "' )" ;

if(mysqli_query($conn,$query)){
    echo 'Succesful';
}
else{
    echo 'sucesfuly failed';
}

Header("Location: dashboard.php");

?>