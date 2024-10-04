<?php

    // $con = mysqli_connect("localhost", "root", "guitar_man", "forgecraft") or die("sorry could not connect to db.");

    // $query = "SELECT event_object_id,event_link,event_rating from event_object order by event_object_id desc limit 0,15";
    // $result = mysqli_query($con, $query) or die(mysqli_error($con));

    // if (mysqli_num_rows($result) == 0) {
    //     echo "<h3>Sorry, there are no events at this time, please try back later.</h3>";
    // } else {
    //     while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //         $event_object_id = $row['event_object_id'];
    //         $event_link = $row['event_link'];
    //         $event_rating = $row['event_rating'];
    //         // CHANGE THIS: url ending below is the link content=pageTarget.
    //         echo "<a href=\"index.php?content=something&id=$event_object_id\">$event_link</a> Rating: $event_rating<br>\n";
    //         echo"<br>\n";
    //     }
    // }


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


<h3>Welcome to ForgeCraft!!</h3>

<p>ForgeCraft is an <i><b>online, nostalgic, clicker game</b></i> that blends <i><b>survival, a rich story-line,</b></i> and <i><b>resource-hoarding</b></i>. You play as <i><b>Gerald</b></i>, a hapless man whose family has gone missing during the <b>Great Mutant Revolt</b>.</p>

<p>Register an account (it just takes a few seconds), and Forge Your Destiny!</p>

<form action="index.php" method="post">

<b>User Name:</b><br><input type="text" name="userid"><br>


<br />


<b>Password:</b><br><input type="password" name="password"><br>


<br />


<font size="1">Confirm Password:</font><br /> 


<input type="password" name="password2"><br>


<p><font size="1"><strong>PICK A UNIQUE PASSWORD</strong></font></p>


<br />


<b>E-mail address:</b><br><input type="text" size="50" name="email">


<p>Privacy Policy: we do not share e-mail addresses with others</p>


<input type="submit" value="Submit">


<input type="hidden" name="content" value="adduser">


<hr size="1" noshade="noshade">


</form>
