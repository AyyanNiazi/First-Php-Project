
<?php
$conn = mysqli_connect('localhost', 'root', '','newone');

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "SELECT * FROM users where user = '$user' AND pass = '$pass' ";
$val = mysqli_query($conn, $query);

 $count = mysqli_num_rows($val);

if($count > 0){
echo 'Sucesful';

Header('Location: dashboard.php');
    // while($r = mysqli_fetch_array($val)){
    //     echo
    // }
}else{
    echo 'sucesfully failed'
}


?>