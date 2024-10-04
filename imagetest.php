<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Image Test</title>
<body>
<?php
include("mylibrary/login.php");
$con = login();
$query = "SELECT id, med_desc FROM buildings";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

echo "<table width=\"50%\" cellpadding=\"1\" border=\"1\">\n";
echo "<tr><td>Product ID</td><td>Description</td><td>Image</td></tr>\n";
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
   $id = $row['id'];
   $med_desc = $row['med_desc'];

   echo "<tr><td>$id</td><td>$med_desc</td>\n";
   echo "<td><img src=\"showimage.php?id=$id\" width=\"80\" height=\"70\"></td></tr>\n";
}
echo "</table>\n";
?>
</body>
</html>