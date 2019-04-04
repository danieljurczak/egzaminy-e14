
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hurtownia</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <div id="top">
        <div id="logo">
            <img src="komputer.png" alt="hurtownia komputerowa">
        </div>
        <div id="lista">
            <ul>
                <li>
                    Sprzęt
                    <ol>
                        <li>
                            Procesory
                        </li>
                        <li>
                            Pamięci RAM
                        </li>
                        <li>
                            Monitory
                        </li>
                        <li>
                            Obudowy
                        </li>
                        <li>
                            Karty graficzne
                        </li>
                        <li>
                            Dyski twarde
                        </li>

                    </ol>
                </li>
                <li>
                    Oprogramowanie
                </li>
            </ul>
        </div>
        <div id="form">
            <h2> Hurtownia komputerowa</h2>
            <form method="POST" action="sklep.php">
                <span>
                    Wybierz kategorię sprzętu:
                </span>
                <br>
                <input type="number" name="kategoria" id="kategoria">
                <button type="submit">SPRAWDŹ</button>
            </form>
        </div>
        </div>
        <main>
            <h1>Podzespoły we wskazanej kategorii</h1>
            <?php
                $polaczenie = mysqli_connect("localhost", "root", "", "sklep");
                if (!$polaczenie) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $kategoria = $_POST['kategoria'];
                $zapytanie = "SELECT nazwa, opis, cena FROM podzespoly WHERE typy_id=".$kategoria;
                if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
                    $result = mysqli_query($polaczenie, $zapytanie);
                    if ($result) {
                        while ($row=mysqli_fetch_row($result))
                        {
                        printf ("<p>%s %s CENA: %s</p>\n",$row[0],$row[1], $row[2]);
                        }
                    } else {
                        echo "Error: " . $zapytanie . "<br>" . mysqli_error($polaczenie);
                    }
                    
                }
                else {
                    echo "Wybierz poprawną kategorię sprzetu ";
                }
                
                
                mysqli_close($polaczenie);


            ?>
        </main>
        <footer>
            <h3>Hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup> do 16<sup>00</sup> </h3>
            <a href="mailto:bok@hurtownia.pl">Napisz do nas</a>
            Partnerzy:
            <a href="http://intel.pl" target="blank">Intel</a>
            <a href="http://amd.pl" target="blank">AMD</a>
            <p>Stronę wykonał: PESEL</p>
        </footer>
    
</body>
</html>