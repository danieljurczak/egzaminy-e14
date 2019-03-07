<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wynajmujemy samochody</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>
            Wynajem samochodów
        </h1>
    </header>
    <main>
        <section id="left">
            <h2>
                DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014
            </h2>
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'komis');
                $query = 'SELECT id, model, kolor FROM samochody WHERE marka LIKE "Toyota" AND rocznik = 2014';
                $query_result = mysqli_query($polaczenie, $query);
                while ($row=mysqli_fetch_row($query_result)){
                    echo $row[0].' Toyota: '.$row[1].' Kolor: '.$row[2];
                    echo '<br>';
                }
            ?>
            <h2>
                WSZYSTKIE DOSTĘPNE SAMOCHODY
            </h2>
            <?php
                $query = 'SELECT id,marka, model, rocznik FROM samochody';
                $query_result = mysqli_query($polaczenie, $query);
                while ($row=mysqli_fetch_row($query_result)){
                    echo $row[0].' '.$row[1].' '.$row[2].' '.$row[3];
                    echo '<br>';
                }
            ?>
        </section>
        <section id="center">
            <h2>
                ZAMÓWIONE AUTA Z NUMRAMI TELEFONÓW KLIENTÓW
            </h2>
            <?php
                $query = 'SELECT samochody.id, samochody.model, zamowienia.telefon FROM zamowienia, samochody WHERE samochody.id= zamowienia.id';
                $query_result = mysqli_query($polaczenie, $query);
                while ($row=mysqli_fetch_row($query_result)){
                    echo $row[0].' '.$row[1].' '.$row[2];
                    echo '<br>';
                }
                mysqli_close($polaczenie);
            ?>
        </section>
        <section id="right">
            <h2>
                NASZA OFERTA
            </h2>
            <ul>
                <li>
                    Fiat
                </li>
                <li>
                    Toyota
                </li>
                <li>
                    Opel
                </li>
                <li>
                    Mercedes
                </li>
            </ul>
            <p>
                Tu pobierzesz naszą <a href="komis.sql">bazę danych</a>
            </p>
            <p>
                autor strony: PESEL
            </p>
        </section>
    </main>
</body>
</html>