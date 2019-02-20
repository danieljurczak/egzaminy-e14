<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hurtownia komputerowa</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="top">
        <div id="lista">
        <ul>
                <li>
                    Producenci
                    <ol>
                        <li>
                            Intel
                        </li>
                        <li>
                            AMD
                        </li>
                        <li>
                            Motorola
                        </li>
                        <li>
                            Corsair
                        </li>
                        <li>
                            ADATA
                        </li>
                        <li>
                            WD
                        </li>
                        <li>
                            Kingstone
                        </li>
                        <li>
                            Patriot
                        </li>
                        <li>
                            Asus
                        </li>
                    </ol>
                </li>
            </ul>   
        </div>
        <div id="form">
            <h1>
                Dystrybucja sprzętu komputerowego
            </h1>
            <form action="hurtownia.php" method="POST">
                <label for="producent">
                    Wybierz producenta 
                </label>
                <input type="number" name="producent" id="producent">
                <button type="submit">WYŚWIETL</button>
            </form>
        </div>
        <div id="logo">
            <img src="sprzet.png" alt="Sprzedajemy komputery">
        </div>
    </div>
    <main>
        <h1>
            Podzespoły wybranego producenta
        </h1>
        <?php
            $polaczenie = mysqli_connect('localhost', 'root','', 'sklep');
            if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
                $producent = $_POST['producent'];
                $zapytanie = "SELECT nazwa, dostepnosc, cena FROM podzespoly WHERE producenci_id=".$producent ;
                $wynik = mysqli_query($polaczenie, $zapytanie);
                while($row=mysqli_fetch_row($wynik)){
                    echo '<p>';
                    echo "$row[0] CENA: $row[2]";
                    if($row[1] == 1){
                        echo " DOSTĘPNY";
                    }
                    else {
                        echo " NIEDOSTEPNY";
                    }
                    echo '</p>';
                }
                
            }
            else {
                echo "Wybierz poprawną kategorię sprzetu ";
            }
            mysqli_close($polaczenie);
            
        ?>
    </main>
    <footer>
        <h3>
            Zapraszamy od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>30</sup>
        </h3>
        Strony partnerów: 
        <a href="http://adata.pl" target=blank>ADATA</a>
        <a href="http://patriot.pl" target=blank>Patriot</a>
        <a href="mailto:biuro@hurt.pl">Napisz</a>
        <p>
            Stronę wykonał: PESEL
        </p>
    </footer>
</body>
</html>