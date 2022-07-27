<?php
include 'connect.php';
if(isset($_POST['submit']))
{
  $imie=$_POST['imie'];
  $nazwisko=$_POST['nazwisko'];
  $adres=$_POST['adres'];
  $telefon=$_POST['telefon'];
  $email=$_POST['email'];
  $haslo=$_POST['haslo'];

  $sql="insert into `uzytkowicy` (imie,nazwisko,adres,telefon,email,haslo) values('$imie','$nazwisko','$adres','$telefon','$email','$haslo')";
   $result=mysqli_query($conn,$sql);
   if($result)
   {
      header('local:panel_admina.php');
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
   <body>
  
  <div id="lista_ksiazek">
    <form method="post" action="">
    <fieldset>
    <legend><h1>LISTA KSIĄŻEK</h1></legend> 
    <div class="mb-3" >
        <label >Imie</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imie">
    </div>
    <div class="mb-3">
        <label >Nazwisko</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="nazwisko">
    </div>
    <div class="mb-3">
        <label >Adres Zamieszkania</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="adres">
    </div>
    <div class="mb-3">
        <label >Telefon</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="telefon">
    </div>
    <div class="mb-3">
        <label >Adres email</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Hasło</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="haslo">
    </div>
    
      <button type="submit" class="btn btn-primary" name="submit"> Wyślij</button>
      <button type="submit" class="btn btn-primary"><a href="panel_admina.php" class="text-light">Przejdz do Panelu</a></button>
      </fieldset>
    </form>
 </div>
 
  </body>
</html>