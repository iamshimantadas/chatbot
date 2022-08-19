<?php

include 'connection.php';
error_reporting(0);
session_start();
if ($_SESSION["admins"]) {
  
} else {
    header("Location: index.php");
}


$qrytxt = $_POST['term'];


$mysqli = $conn;
$check="SELECT * FROM `chatbot` WHERE `queries`='$qrytxt'";
//$master = mysqli_query($conn,$check);
$result = $mysqli->query($check);
$row = $result->fetch_assoc();
$idval = $row['id'];

$cnt=0;

if ($idval) {
  echo "<br>";
  $sql="DELETE FROM `chatbot` WHERE `id`='$idval'";
  $query =  mysqli_query($conn,$sql);
  if ($query) {
    echo "<br>";
    echo "<font size='20px;' color='red'>Query deleted!!</font>";
    $cnt++;

  } else {
    echo "<br>";
    echo "<font size='20px;' color='blue'>Query not deleted!! Something went wrong!! </font>";
    
  }
  
  
} else {
    # code...
}

?>



<?php
include 'db.php';
error_reporting(0);

$qrytxt = $_POST['term'];


$sql2="DELETE FROM `users` WHERE `name`='$qrytxt'";
if ($cnt>0) {
    $query2 = mysqli_query($conn,$sql2);
}

if ($query2) {
    echo "<font size='20px' color='blue'>query also deleted from autosuggestion!!</font>";
    echo "<br>";
} else {
    echo "<font size='20px' color='red'>autosuggestion not clear!! something went wrong :( </font>";
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

