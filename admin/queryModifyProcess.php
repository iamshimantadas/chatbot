<?php

include 'connection.php';
error_reporting(0);
session_start();
if ($_SESSION["admins"]) {
    echo "<br>";
    echo "<br>";
  echo "<font style='margin-left:30px;'>Welcome admin</font>";
} else {
    header("Location: index.php");
}


$qrytxt = $_POST['term'];
$reply =     $_POST['reply'];

echo "<br>";
echo "Your's modified query is ".$qrytxt;
echo "<br>";
echo "reply against query is ".$reply;
echo "<br>";

$mysqli = $conn;
$check="SELECT * FROM `chatbot` WHERE `queries`='$qrytxt'";
//$master = mysqli_query($conn,$check);
$result = $mysqli->query($check);
$row = $result->fetch_assoc();


if ($row) {
  
    echo "<font size='20px'>queries found</font>";
    echo "<br>";
    $sql="UPDATE `chatbot` SET `replies`='$reply' WHERE `queries`='$qrytxt'";
    $query = mysqli_query($conn,$sql);

if ($query) {
    echo "<font size='20px' color='blue'>reply of query updated!!</font>";
    echo "<br>";
} else {
    echo "<font size='20px' color='red'>something went wrong !!</font>";
    echo "<br>";
}

} else {
    echo "<font size='20px'>query not found!!</font>";
    echo "<br>";

}

?>


<html>
   <body>
      <script>
         setTimeout(function(){
            window.location.href = 'adminpanel.php';
         }, 2000);
      </script>
      <p>plz wait!!</p>
   </body>
</html>
