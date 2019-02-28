<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <header>
        <h1>
            Portal Ogłoszeniowy
        </h1>
    </header>
    <main>
        <section id="left">
            <h2>
                Kategorie ogłoszeń
            </h2>
            <ol>
                <li>
                    Książki
                </li>
                <li>
                    Muzyka
                </li>
                <li>
                    Filmy
                </li>
            </ol>
            <img src="ksiazki.jpg" alt="Kupię/sprzedam książkę">
            <table>
                <tr>
                    <td>
                        Liczba ogłoszeń
                    </td>
                    <td>
                        Cena ogłoszenia 
                    </td>
                    <td>
                        Bonus
                    </td>
                </tr>
                <tr>
                    <td>
                        1-10
                    </td>
                    <td>
                        1 PLN
                    </td>
                    <td rowspan=3>
                        Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie
                    </td>
                </tr>
                <tr>
                    <td>
                        11-50
                    </td>
                    <td>
                        0,80 PLN
                    </td>
                </tr>
                <tr>
                    <td>
                        51 i więcej
                    </td>
                    <td>
                        0,60 PLN
                    </td>
                </tr>
            </table>
        </section>
        <section id="right">
            <h2>
                Ogłoszenia kategorii książki
            </h2>
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'ogloszenia');
                $zapytanie1 = 'SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria=1;';
                $wynik_zapytania1 = mysqli_query($polaczenie, $zapytanie1);
                while ($wiersz = mysqli_fetch_row($wynik_zapytania1)){
                    $id_ogloszenia = $wiersz[0];
                    $zapytanie2 = 'SELECT uzytkownik.telefon FROM uzytkownik INNER JOIN ogloszenie ON ogloszenie.uzytkownik_id = uzytkownik.id WHERE ogloszenie.id = '.$id_ogloszenia;
                    $wynik_zapytania2 = mysqli_query($polaczenie, $zapytanie2);
                    $telefon = mysqli_fetch_row($wynik_zapytania2);
                    echo '<h3>';
                    echo $wiersz[0].' '.$wiersz[1];                    
                    echo '</h3>';
                    echo '<p>';
                    echo $wiersz[2];
                    echo '</p>';
                    echo '<p>';
                    echo 'telefon kontaktowy '.$telefon[0];
                    echo '</p>';     

                }
                mysqli_close($polaczenie);
            ?>
        </section>
    </main>
    <footer>
        Portal ogłoszeniowy opracował: PESEL
    </footer>
</body>
</html>