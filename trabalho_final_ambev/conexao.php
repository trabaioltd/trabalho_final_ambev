<?php 

    $link = mysqli_connect( 'localhost', 'root' , '')
    or die("could not connect:".mysqli_error($link));
    mysqli_select_db($link, 'taruma') or die("Could not select database");

?>