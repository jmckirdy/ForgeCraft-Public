<?php
   header("Content-type: image/jpeg");
   $id = $_GET['id'];
   include("mylibrary/login.php");
   $con = login();

   // ;"; that is for sql; and php row; -not sure if needed or not
   $query = "SELECT picture from buildings WHERE id = $id;";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $picture = $row['picture'];
   echo $picture;

   // needs to be at url ?id=1 or 2,3 etc.
?>