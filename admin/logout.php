
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "All session variables are now removed, and the session is destroyed."
?>


<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 2000);
      </script>
      <p>plz wait!!</p>


</body>
</html>