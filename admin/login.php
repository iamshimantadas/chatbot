<?php 
include 'connection.php';
error_reporting(0);
session_start();

$emailaddr =    $_POST['email'];
$pass =     $_POST['passd'];
echo "your email address is  ".$emailaddr;
echo "<br>";
echo "password is  ".$pass;
echo "<br>";

$Checksql="SELECT enrollno FROM admins WHERE email='$emailaddr' AND passd='$pass'";
$query = mysqli_query($conn,$Checksql);
if ($query) {
    echo "<br>";
    echo "query executed!!";
} else {echo "<br>";
    echo "query not executed!!";
}

$row = mysqli_fetch_assoc($query);
echo $row['date'];


if ($row) {
    echo "<font size='20px'>admin found !!</font>";
   
    $_SESSION["admins"] = "adminfound";
    // redirect into another page 
    header("Location: adminpanel.php");

} else {
    echo "<font size='20px' color='red'>admin not found !!</font>";
    echo "<br>"; echo "<br>";
    echo "<br>";
    echo "<a href='index.php'>plz provide correct email and password!!</a>";
}

?>