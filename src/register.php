<?php
$name= $_POST["name"];
$mail= $_POST["mail"];
$pass= $_POST["pass"];
$repass= $_POST["repass"];
?>
<?php
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname= "store";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, mail, pass, repass)
VALUES ('$name', '$mail', '$pass', '$repass')";

 if($pass==$repass) {
if ($conn->query($sql) === TRUE) {
  echo "registerd successfully";
  // header("location:registration.php");

  $message = "Registerd succesfully";
  echo "<script type='text/javascript'>alert('$message');</script>";
  echo "your record has been saved succesfully";
  }
} 
else {
  header("location:registration.php");
  // echo "password didnt match";
}

$conn->close();
?>