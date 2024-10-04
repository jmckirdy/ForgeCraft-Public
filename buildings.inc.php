<h2>Buildings</h2>
<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $conn = mysqli_connect("localhost", "root", "guitar_man", "forge_life");

    //     if($conn) {
    //         echo "It's working!";
    //     } else {
    //         echo "It's NOT!";
    //     }
    // }

    include("mylibrary/login.php");
    $con = login();

    $query = "SELECT id, title, event_desc_medium, item_desc_short from events_and_items order by id desc limit 0,15";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    if (mysqli_num_rows($result) == 0) {
        echo "<h3>Sorry, there are no buildings at this time, please try back later.</h3>";
    } else {
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $id = $row['id'];
            $title = $row['title'];
            $event_desc_medium = $row['event_desc_medium'];
            $item_desc_short = $row['item_desc_short'];
            // CHANGE THIS: url ending below is the link content=pageTarget.
            echo "<a href=\"index.php?content=something&id=$id\">$title</a> Event: $event_desc_medium | Item: $item_desc_short<br>\n";
            echo"<br>\n";
        }
    }
    
?>