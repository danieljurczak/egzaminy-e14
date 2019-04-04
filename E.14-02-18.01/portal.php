<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ogłoszenia drobne</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h2>
            Ogłoszenia drobne
        </h2>
    </header>
    <main>
        <section id="left">
            <h2>
                Ogłoszeniadowcy
            </h2>
            <?php 
                $polaczenie = mysqli_connect('localhost', 'root', '', 'ogloszenia');
                $zapytanie1 = 'SELECT id, imie, nazwisko, email from uzytkownik WHERE id<4;';
                $wynik_zapytania1 = mysqli_query($polaczenie, $zapytanie1);
                while ($row = mysqli_fetch_row($wynik_zapytania1)){
                    $zapytanie2 = 'SELECT ogloszenie.tytul FROM ogloszenie WHERE ogloszenie.uzytkownik_id='.$row[0].';';
                    $wynik_zapytania2 = mysqli_query($polaczenie, $zapytanie2);
                    $row2 = mysqli_fetch_array($wynik_zapytania2);
                    echo '<h3>';
                    echo $row[0].' '.$row[1].' '.$row[2];
                    echo '</h3>';
                    echo '<p>';
                    echo $row[3];
                    echo '</p>';
                    echo '<p>';
                    echo 'Ogłoszenie: ';
                    echo $row2[0];
                    echo '</p>';
                }
                mysqli_close($polaczenie);


            ?>
        </section>
        <section id="right">
            <h2>
                Nasze kategorie
            </h2>
            <ul>
                <li>
                    Książki
                </li>
                <li>
                    Muzyka
                </li>
                <li>
                    Multimedia
                </li>
            </ul>
            <img src="ksiazki.jpg" alt="uwolnij swoją książkę">
            <table>
                <tr>
                    <td>
                        Ile?
                    </td>
                    <td>
                        Koszt 
                    </td>
                    <td>
                        Promocja 
                    </td>
                </tr>
                <tr>
                    <td>
                        1 - 40
                    </td>
                    <td>
                        1,20 PLN 
                    </td>
                    <td rowspan="2">
                        Subskrybuj newsletter upust 0,30 PLN na ogłoszenie
                    </td>
                </tr>
                <tr>
                    <td>
                        41 i więcej
                    </td>
                    <td>
                        0,70 PLN
                    </td>
                </tr>
            </table>
        </section>
    </main>
    <footer>
        Portal ogłoszenia drobne opracował PESEL
    </footer>
</body>
</html>