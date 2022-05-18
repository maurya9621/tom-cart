<?php
//  session_start();

 $mail= $_POST["email"];
$pass =$_POST["passw"];
//  print_r ($_SESSION["mail"]);
//  print_r ($_SESSION["pass"]);

$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname= "store";

$conn = new mysqli($servername, $username, $password, $dbname);
// $stmt="SELECT * FROM `users` WHERE `mail` LIKE `$mail` AND `pass` LIKE `$pass`";
$stmt="SELECT * FROM `users` WHERE `mail` = '$mail' AND `pass` = '$pass'";
$result= mysqli_query($conn,$stmt) or die(mysqli_error($conn));
$match=mysqli_num_rows($result);
//  print_r ($match);die;
if($result!=$match){
    
    // $message = "password didnt matched";
    // echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: login.php");
    // echo "password didnt matched";
}
else{
    // header("Location: logge")
    $message = "login succesfully";
    echo "<script type='text/javascript'>alert('$message');</script>";

}


?>
