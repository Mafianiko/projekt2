<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `uzytkowicy` WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$imie=$row['imie'];
$nawisko=$row['nazwisko'];
$adres=$row['adres'];
$telefon=$row['telefon'];
$email=$row['email'];
$haslo=$row['haslo'];
if(isset($_POST['submit']))
{
  $imie=$_POST['imie'];
  $nazwisko=$_POST['nazwisko'];
  $adres=$_POST['adres'];
  $telefon=$_POST['telefon'];
  $email=$_POST['email'];
  $haslo=$_POST['haslo'];

  $sql="update `uzytkowicy` set id=$id, imie='$imie', nazwisko='$nazwisko', email='$email', telefon='$telefon', adres='$adres', haslo='$haslo' WHERE id=$id ";
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


<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
      #rejestracja
      {
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
    </style>
  <body>
    <h1>EDYCJA KONTA UŻYTKOWNIKA</h1>
  <div id="rejestracja">
    <form method="post" action="">
    <div class="mb-3" >
        <label >Imie</label>
        <input type="text" class="form-control" name="imie" autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Nazwisko</label>
        <input type="text" class="form-control" name="nazwisko" autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Adres Zamieszkania</label>
        <input type="text" class="form-control" name="adres" autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Telefon</label>
        <input type="text" class="form-control" name="telefon" autocomplete="off">
    </div>
    <div class="mb-3">
        <label >Adres email</label>
        <input type="text" class="form-control" name="email" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Hasło</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="haslo" autocomplete="off">
    </div>
      <button type="submit" class="btn btn-primary" name="submit">Edytuj</button>
    </form>
 </div>
  </body>
</html>