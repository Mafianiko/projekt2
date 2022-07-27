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

    <form action="kontakt.php" method="post">
            <p>Masz jakieś pytanie? Wyślij do nas email <br> <input type="text" name="emaill"> <br> </p> <!-- Podaje sie email -->
            <span>Dodaj swoje zapytanie</span> <br>
            <textarea name="komentarz" rows="4" cols="55"></textarea> <br> <br> <!-- Pole na komentarz -->
        
            <input type="submit" name="submit" value="WYŚLIJ"> <!-- Przycisk do przesylania zapytania do bazy -->
        </form> <!--Formularz kontaktu -->
        <?php
       
            include "connect.php"; //polaczenie z baza danych

            
            
            if (isset($_POST['emaill']) && isset($_POST['komentarz'])) {

                $nick=$_POST['emaill']; //pobiera dane z formularza
                $komentarz=$_POST['komentarz']; //pobiera dane z formularza
    
                if(isset($_POST['submit'])) //jesli przycisk zostanie nacisniety to sie uruchomi dzialanie
                {
                    $zapytanie=mysqli_query($conn, "INSERT INTO zapytania SET email='$nick', tresc='$komentarz'"); 
                    //dodanie danych z formularza do baza danych
                    echo "Zapytanie zostało wysłane"; //powiadomienie o dodaniu
                }
            }
            mysqli_close($conn);

        ?>
        <hr style="border: 1px solid black"> <!-- Odstepy-->
        <hr style="border: 1px solid black"> 
        <hr style="border: 1px solid black">
        <h1>Bartosz Lisowski</h1>
        <h1>ul.Owocowa 102, Wrocław 50-508
        </br>
        telefon: 589 923 350</br>
        e-mail:<a href="mail.to:barteklisowski@gmail.com">barteklisowski@gmail.com</a></br>
        </h1>
        <div id="mapa"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506.8049489334812!2d17.056621215754145!3d51.07515057956647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc2e59a5a68b5%3A0x4e659526614a4f06!2sOwocowa%20102%2C%2050-508%20Wroc%C5%82aw!5e0!3m2!1spl!2spl!4v1622544640108!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        <!-- Mapa z Google-->
        </div>
        
    </div>
    
        <footer>Stronę wykonał: Bartosz Lisowski , kontakt: <mail-to>barteklisowski@gmail.com</mail-to>
        <br>COPYRIGHTS &copy; 2022 LUBIMYKSIAZKI.PL</footer>
    
</body>
</html>