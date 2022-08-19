<html>
    <body>
        <br>
        <a href="adminpanel.php">
        <button style="background-color:blue;color:white;">go back</button>
        </a>
        <br>
        <br>
    </body>
</html>


<?php
include 'connection.php';
error_reporting(0);
session_start();

if ($_SESSION["admins"]) {
  
  
   echo "<br>";
} else {
    header("Location: index.php");
}
?>


<?php

$mysqli = $conn;

$query = "SELECT * FROM chathistory";


echo '<table border="2px" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Enroll No</font> </td> 
          <td> <font face="Arial">chats</font> </td> 
          <td> <font face="Arial">date</font> </td> 
         
          </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["enrollno"];
        $field2name = $row["name"];
        $field3name = $row["date"];
        


         


        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  </tr>';
    }
    $result->free();

} 

?>