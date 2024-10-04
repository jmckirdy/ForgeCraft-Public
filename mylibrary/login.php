<?php
function login()
{
   $con = mysqli_connect("localhost", "root", "guitar_man", "forgecraft") or die('Could not connect to server');
   return $con;
}
?>