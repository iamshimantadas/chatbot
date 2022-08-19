<?php
include 'connection.php';
error_reporting(0);


$emailaddr = 	$_POST['email'];
$pass = 	$_POST['passd'];
$date = date('Y/m/d');
$sql="INSERT INTO `admins` (`enrollno`, `email`, `passd`, `date`) VALUES (NULL, '$emailaddr', '$pass', '$date')";
$query = mysqli_query($conn,$sql);
if ($query) {
    echo "<font size='20px'>admin registered successfully</font>";
} else {
    echo "sorry! plz try agin! ";
}

?>

<html>
   <body>
      <script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 2000);
      </script>
      <p>plz wait!</p>
   </body>
</html>