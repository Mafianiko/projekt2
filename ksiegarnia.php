<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    

    <div id="promocja">
        <img id="free" src="https://cdn2.iconfinder.com/data/icons/thin-delivery/24/thin-1154_delivery_free_shipping-128.png">
        <h3><i>Darmowa dostawa przy zamówieniu za min. 100zł</i></h3>
        <p>* na terenie Polski</p>
        <br><hr>
    <h2>Bestseller: </h2>
        <div class="kafelek">
                <div class="okladka"><img class="grafika" src="poz7.jpg" ></div>
                <div class="opis"><p class="tytul">Z zimną krwią</p><p class="autor">Robert Bryndza</p></div>
            </div>
    </div> 
    
    <div id="tresc">

        <div class="kafelek">
            <div class="okladka"><img class="grafika" src="poz1.jpg"></div>
            <div class="opis"><p class="tytul">Ostatnie życzenie</p><p class="autor">Andrzej Sapkowski</p></div>
        </div>

        <div class="kafelek">
            <div class="okladka"><img class="grafika" src="poz2.jpg"></div>
            <div class="opis"><p class="tytul">Władca pierścieni</p><p class="autor">J.R.R. Tolkien</p></div>
        </div>

        <div class="kafelek">
            <div class="okladka"><img class="grafika" src="poz3.jpg"></div>
            <div class="opis"><p class="tytul">Duma i uprzedzenie</p><p class="autor">Jane Austen</p></div>
        </div>

        <div class="kafelek">
            <div class="okladka"><img class="grafika" src="poz4.jpg"></div>
            <div class="opis"><p class="tytul">Zabić drozda</p><p class="autor">Harper Lee</p></div>
        </div>

        <div class="kafelek">
            <div class="okladka"><img class="grafika" src="poz5.jpg"></div>
            <div class="opis"><p class="tytul">Igrzyska śmierci</p><p class="autor">Suzanne Collins</p></div>
        </div>

        <div class="kafelek">
            <div class="okladka"><img class="grafika" src="poz6.jpg"></div>
            <div class="opis"><p class="tytul">Alicja w krainie czarów</p><p class="autor">Carroll Lewis</p></div>
        </div>

        <div class="kafelek">
            <div class="okladka"><img class="grafika" src="poz8.jpg"></div>
            <div class="opis"><p class="tytul">Oskar i pani Róża</p><p class="autor">Daniel Kahneman	</p></div>
        </div>

        <div class="kafelek">
            <div class="okladka"><img class="grafika" src="poz9.jpg"></div>
            <div class="opis"><p class="tytul">Myślenie. O myśleniu szybkim i wolnym</p><p class="autor">Daniel Kahneman</p></div>
        </div>

        <div id="strzala"><a href="" target="_h1">
            <img src="https://cdn4.iconfinder.com/data/icons/navigation-40/24/chevron-up-256.png" height="50px" width="50px">
        </a></div>
    
        <!-- SELECT grafika, tytul, autor FROM ksiazki LIMIT=6
        kafelek okladka $rekord['jpg'] opis tytul $rekord['tytul'] autor $rekord['autor']-->
    </div>
    
        <footer>Stronę wykonał: Bartosz Lisowski , kontakt: <mail-to>barteklisowski@gmail.com</mail-to>
        <br>COPYRIGHTS &copy; 2022 LUBIMYKSIAZKI.PL</footer>
    
</body>
</html>