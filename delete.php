<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `uzytkowicy` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:panel_admina.php');
    }else
    {
        die(mysqli_error($conn));
    }
}


?>