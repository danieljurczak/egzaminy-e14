<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>
<body>
    <header>
        <h1>
            PRAKTYKA LEKARZA RODZINNEGO 
        </h1>
    </header>
    <aside>
        <h3>
            LISTA PACJENTÓW
        </h3>
        <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'przychodnia');
            $query = 'SELECT id, imie, nazwisko FROM pacjenci';
            $query_result = mysqli_query($polaczenie, $query);
            while($row = mysqli_fetch_row($query_result)){
                echo $row[0].' '.$row[1].' '.$row[2].'<br>';
            }
            mysqli_close($polaczenie);
        ?>
        <br><br>
        <form action="pacjent.php">
            Podaj id:<br>
            <input type="number" name="id">
            <button type="submit">Pokaż dane</button>
        </form>
        <h3>
            LEKARZE
        </h3>
        <ul>
            <li>
                pn - śr 
                <ol>
                    <li>
                        Anna Kwiatkowska
                    </li>
                    <li>
                        Jan Kowalewski
                    </li>
                </ol>
            </li>
            <li>
                czw - pt
                <ol>
                    <li>
                        Krzysztof Nowak
                    </li>
                </ol>
            </li>
        </ul>
    </aside>
    <main>
        <h2>
            INFORMACJE SZCZEGÓŁOWE O PACJENCIE
        </h2>
        <p>
            Brak wybranego pacjenta
        </p>
    </main>
    <footer>
        <p>
            utworzone przez: PESEL
        </p>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </footer>
</body>
</html>