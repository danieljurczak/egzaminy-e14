<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Salon pielęgnacji</title>
    <link rel="stylesheet" href="salon.css">
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="weterynarz.css">
    <title>Weterynarz</title>
</head>
<body>
    <header>
        <h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
    </header>
    <div id="left">
        <h2>
            SALON ZAPRASZA W DNIACH
        </h2>
        <ul>
            <li>
                Poniedziałek, 12:00 -18:00
            </li>
            <li>
                Wtorek, 12:00 - 18:00
            </li>
        </ul>
        <h2>
            WETERYNARZ
        </h2>
        <a href="pies.jpg"><img src="pies-mini.jpg"></a>
        <p>
            Umów się telefonicznie na wizytę lub po prostu przyjdź!
        </p>
        
    </div>
    <div id="center">
        <h2>
            PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE
        </h2>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'salon');
        $query = 'SELECT zwierzeta.imie, zwierzeta.rodzaj, zwierzeta.nastepna_wizyta, zwierzeta.telefon FROM zwierzeta WHERE zwierzeta.nastepna_wizyta != 0';
        $query_result = mysqli_query($polaczenie, $query);
        while($row = mysqli_fetch_row($query_result)){
            if ($row[1] == 1){
                echo " Pies: $row[0] <br> Data następnej wizyty: $row[2] telefon własciciela: $row[3]<br>";
            }
            else {
                echo " Kot: $row[0] <br> Data następnej wizyty: $row[2] telefon własciciela: $row[3]<br>";

            }
        }
        ?>
    </div>
    <div id="right">
        <h2>
            USŁUGI
        </h2>
        <?php
        $query = 'SELECT nazwa, cena FROM uslugi';
        $query_result = mysqli_query($polaczenie, $query);
        while($row = mysqli_fetch_row($query_result)){
            echo "$row[0] $row[1] <br>";
        }
        mysqli_close($polaczenie);

        ?>
        
    </div>
</body>
</html>
</body>
</html>