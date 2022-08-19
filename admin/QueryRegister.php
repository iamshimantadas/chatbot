<?php 
include 'connection.php';
error_reporting(0);
session_start();
if ($_SESSION["admins"]) {
  echo "<font style='margin-left:20px;'>Welcome admin</font>";
} else {
    header("Location: index.php");
}


$qrytxt = $_POST['querytxt'];
$reply =     $_POST['reply'];

echo "<br>";
echo "query is ".$qrytxt;
echo "<br>";
echo "reply is ".$reply;
echo "<br>";

$mysqli = $conn;
$check="SELECT * FROM `chatbot` WHERE `queries`='$qrytxt'";
//$master = mysqli_query($conn,$check);
$result = $mysqli->query($check);
$row = $result->fetch_assoc();
if ($row) {
  
    echo "<font size='20px'>dupliate queries found</font>";
    echo "<br>";
} else {
    echo "<font size='20px'>unique query</font>";
    echo "<br>";

 // if no any duplicate query found then new query with reply will inserted..

$sql="INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES (NULL, '$qrytxt','$reply')";
$query = mysqli_query($conn,$sql);
$cnt=0;

if ($query) {
    echo "<font size='20px' color='blue'>query inserted</font>";
    echo "<br>";
    $cnt++;
} else {
    echo "<font size='20px' color='red'>query not inserted!!</font>";
    echo "<br>";
}

}

 ?>

<?php
include 'db.php';
error_reporting(0);

$qrytxt = $_POST['querytxt'];
//$reply =     $_POST['reply'];

$sql2="INSERT INTO `users` (`id`, `name`) VALUES (NULL, '$qrytxt')";
if ($cnt>0) {
    $query2 = mysqli_query($conn,$sql2);
}

if ($query2) {
    echo "<font size='20px' color='blue'>query also inserted into autosuggestion!!</font>";
    echo "<br>";
} else {
    echo "<font size='20px' color='red'>autosuggestion not updated!! </font>";
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

