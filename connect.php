<?php

    $conn=new mysqli('localhost', 'root','','projekt');

    if(!$conn)
    {
        die(mysqli_error($conn));
    }

?>