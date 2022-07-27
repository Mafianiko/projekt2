<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projekt_styl.css">
    <title>Lubimy książki</title>
</head>
<body>
    <header>
        <div id="logo">
            <img src="https://cdn1.iconfinder.com/data/icons/education-colors/100/08-512.png" alt="" height="100px" width="100px">
        </div>

        <div id="napis">
            <h1>Lubimy<br>ksiązki.pl</h1>
        </div>

        <nav>
            <table>
                <tr>    
                    <td>
                        <a href="ksiegarnia.php"><img class="ikonki" src="https://cdn4.iconfinder.com/data/icons/continuous-line-navigation/131/House-512.png"><br>Strona główna</a>
                    </td> <!-- Do strony głównej-->
                    <td>
                        <a href="lista_ksiazek.php"><img class="ikonki" src="https://cdn2.iconfinder.com/data/icons/knowledge-is-power/60/book-open-512.png"><br>Lista książek</a>
                    </td> <!--do listy książek-->
                    <td>
                        <a href="kontakt.php"><img class="ikonki" src="https://cdn3.iconfinder.com/data/icons/contact-us-outline-2/60/028_-_Contact_Info-512.png"><br>Kontakt</a>
                    </td> <!--Do witryny kontakt.php-->
                    <td>
                        <a href="rejestracja.php"><img class="ikonki" src="https://cdn4.iconfinder.com/data/icons/office-thick-outline/36/office-14-512.png" alt="user"><br>Rejestracja</a>
                    </td> <!--do logowania na stronie-->
            </table>
        </nav>
    </header>
    

    <div class="srodek"></div>
    <div class="srodek">
    <table class="greyGridTable">
<thead>
<tr>
<th>ID</th>
<th>TYTUŁ</th>
<th>CENA</th>
<th>ILOŚĆ SZTUK</th>
<th>GATUNEK</th>
<th>WYDAWCA</th>
<th>AUTOR</th>
<th>ROK</th>
</tr>
</thead>
<tbody>
    <?php include 'connect.php';
        $sql= "SELECT ksiazka.id_ksiazka, ksiazka.tytul, ksiazka.cena,ksiazka.ilosc_ksiazek, gatunek.gatunek, wydawca.nazwa_wydawca, autor.nazwa_autor, rok.rok FROM ksiazka, gatunek, wydawca, autor, rok WHERE ksiazka.id_gatunek = gatunek.id_gatunek AND ksiazka.id_wydawca = wydawca.id_wydawca AND ksiazka.id_autor = autor.id_autor AND ksiazka.id_rok = rok.id_rok";
        $result=mysqli_query($conn,$sql);
        
            while($row=mysqli_fetch_array($result))
            {
               
                echo'<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'zł</td>
                    <td>'.$row[3].'  szt</td>
                    <td>'.$row[4].'</td>
                    <td>'.$row[5].'</td>
                    <td>'.$row[6].'</td>
                    <td>'.$row[7].'</td>
                </tr>';
            }
        
    ?>
</tbody>
</table>
        
    </div>
    
        <footer>Stronę wykonał: Bartosz Lisowski , kontakt: <mail-to>barteklisowski@gmail.com</mail-to>
        <br>COPYRIGHTS &copy; 2022 LUBIMYKSIAZKI.PL</footer>
    
</body>
</html>