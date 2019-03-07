<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sklep muzyczny</title>
    <link rel="stylesheet" href="muzyka.css">
</head>
<body>
    <header>
        <h1>
            SKLEP MUZYCZNY
        </h1>
    </header>
    <main>
        <section id="left">
            <h2>
                NASZA OFERTA
            </h2>
            <ol>
                <li>
                    Instrumenty muzyczne
                </li>
                <li>
                    Sprzet audio
                </li>
                <li>
                    Płyty CD
                </li>
            </ol>
        </section>
        <section id="right">
            <?php
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $adres = $_POST['adres'];
                $telefon = $_POST['telefon'];
                $login = $_POST['login'];
                $haslo = $_POST['haslo'];
                echo 'Konto '.$imie.' '.$nazwisko.' zostało zarejestrowane w slepie muzycznym';
                $polaczenie = mysqli_connect('localhost', 'root', '', 'Sklep');
                $query = "INSERT INTO uzytkownicy (imie, nazwisko, adres, telefon) VALUES ('$imie', '$nazwisko', '$adres', '$telefon');";
                mysqli_query($polaczenie, $query);
                $query = "INSERT INTO konta (login, haslo) VALUES ('$login', '$haslo');";
                mysqli_query($polaczenie, $query);
                mysqli_close($polaczenie);
            ?>
        </section>
    </main>
</body>
</html>