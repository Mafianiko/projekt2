<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    #panel
    {
        margin-left: auto;
        margin-right: auto;
        width: 95%;
    }
    .text-light
    {
        text-decoration: none;
    }
</style>
<body>
    <div class="container">
        <button class="btn btn-primary my-5 "> <a href="rejestacja.php" class="text-light" > Dodaj użytkownika</a></button>
    </div>
    <div id="panel">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Adres Zamieszkania</th>
      <th scope="col">Telefon</th>
      <th scope="col">Email</th>
      <th scope="col">Hasło</th>
      <th scope="col">Operacja</th>

    </tr>
  </thead>
  <tbody>



  <?php
    include 'connect.php';
    $sql= "SELECT * FROM uzytkowicy";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $imie=$row['imie'];
            $nazwisko=$row['nazwisko'];
            $adres=$row['adres'];
            $telefon=$row['telefon'];
            $email=$row['email'];
            $haslo=$row['haslo'];
            echo'<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$imie.'</td>
                <td>'.$nazwisko.'</td>
                <td>'.$adres.'</td>
                <td>'.$telefon.'</td>
                <td>'.$email.'</td>
                <td>'.$haslo.'</td>
                <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Edytuj</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Usuń</a></button>
                </td>
            </tr>';
        }
    }
  ?>
   
  </tbody>
</table>
    </div>
</body>
</html>