<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="weterynarz.css">
    <title>Weterynarz</title>
</head>
<body>
    <header>
        <h1>GABINET WETERYNARYJNY</h1>
    </header>
    <div id="left">
        <h2>
            PSY
        </h2>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'weterynarz');
        $query = 'SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj= 1';
        $query_result = mysqli_query($polaczenie, $query);
        while($row = mysqli_fetch_row($query_result)){
            echo "$row[0] $row[1] $row[2] <br>";
        }
        ?>
        <h2>
            KOTY
        </h2>
        <?php
        $query = 'SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj= 2';
        $query_result = mysqli_query($polaczenie, $query);
        while($row = mysqli_fetch_row($query_result)){
            echo "$row[0] $row[1] $row[2] <br>";
        }
        ?>
    </div>
    <div id="center">
        <h2>
            SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH
        </h2>
        <?php
        $query = 'SELECT imie, telefon, szczepienie, opis FROM zwierzeta';
        $query_result = mysqli_query($polaczenie, $query);
        while($row = mysqli_fetch_row($query_result)){
            echo " Pacjent: $row[0] <br> Telefon własciciela: $row[1] Ostatnie szczepienie: $row[2] Informacje: $row[3] <hr>";
        }
        mysqli_close($polaczenie);
        ?>
    </div>
    <div id="right">
        <h2>
            WETERYNARZ
        </h2>
        <a href="logo.jpg"><img src="logo-mini.jpg"></a>
        <p>
            Krzysztof Nowakowski, lekarz weterynarii
        </p>
        <h2>
            GODZINY PRZYJĘĆ
        </h2>
        <table>
            <tr>
                <td>
                    Poniedziałek
                </td>
                <td>
                    15:00 - 19:00
                </td>
            </tr>
            <tr>
                <td>
                    Wtorek
                </td>
                <td>
                    15:00 - 19:00
                </td>
            </tr>
        </table>
    </div>
</body>
</html>