<?php
include 'connection.php';
error_reporting(0);
session_start();

if ($_SESSION["admins"]) {
  echo "<br>";
   echo "<font style='margin-left:30px;'>welcome admin!!</font>";
   echo "<br>";
   echo "<br>";
} else {
    header("Location: index.php");
}
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Panel</title>
  </head>
  <body>
    <br>
    <br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">

        <table>
          <tr>
          <a href="insertQuery.php">
            <button class='btn btn-primary'>
                Insert Query
            </button>
            </a>

          </tr> 
          
          <tr>
              <br>
              <br>
          <a href="queryModily.php">
            <button class='btn btn-dark' style='margin-left:30px;'>
        Query modify with reply
        </button>
            </a>
            
        
          </tr>
        </table>
           
          
          
        </div>
        <div class="col-1"></div>
        <br> <br>
        <br>
        <div class="col-1"></div>
        <div class="col-10">
      
        
          <br>

        <a href="delete.php">
            <button class='btn btn-danger' style='margin-left:10px;'>
        Delete Query(record)
        </button>
            </a>
            <br>
 <br>
 <br>
 
            <a href="logout.php">
            <button class='btn btn-danger' style='margin-left:10px;'>
       logout
        </button>
            </a>
          


            <br>

            <p class="text-center" style='font-size:30px;'><b>View Chat-history!!</b></p>
            <br>
            <p class="text-center">

            <a href="fullHistory.php">
            <button class='btn' style='margin-left:10px;background-color:#9400D3;color:white;'>
       <b>full history</b>
        </button>
            </a>

            <a href="sort.php">
            <button class='btn btn-warning' style='margin-left:20px;'>
      <b>sort by date</b>
        </button>
            </a>


            </p>
           
        </div>
        <div class="col-1"></div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
