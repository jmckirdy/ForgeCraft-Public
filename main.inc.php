<h2>Main file</h2>
<?php
    include("mylibrary/login.php");
    $con = login();

    $query = "SELECT id,title,med_desc from buildings order by id desc limit 0,15";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    if (mysqli_num_rows($result) == 0) {
        echo "<h3>Sorry, there are no events at this time, please try back later.</h3>";
    } else {
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $id = $row['id'];
            $title = $row['title'];
            $med_desc = $row['med_desc'];
            // CHANGE THIS: url ending below is the link content=pageTarget.
            echo "<a href=\"index.php?content=something&id=$id\">$title</a> Short Description: $med_desc<br>\n";
            echo"<br>\n";
        }
    }
    
?>