<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Komis samochodowy</title>
    <link rel="stylesheet" href="auto.css">
</head>
<body>
    <header>
        <h1>
            SAMOCHODY
        </h1>
    </header>
    <main>
        <section id="left">
            <h2>
                Wykaz samochodów
            </h2>
            <ul>
                <?php
                    $polaczenie = mysqli_connect('localhost', 'root', '', 'komis');
                    $query = 'SELECT id, marka, model FROM samochody';
                    $query_result = mysqli_query($polaczenie, $query);
                    while ($row=mysqli_fetch_row($query_result)){
                        echo '<li>';
                        echo $row[0].' '.$row[1].' '.$row[2];
                        echo '</li>';
                    }

                ?>
            </ul>
            <h2>
                Zamówienia
            </h2>
            <ul>
                <?php
                    $query = 'SELECT Samochody_id, Klient FROM zamowienia';
                    $query_result = mysqli_query($polaczenie, $query);
                    while ($row=mysqli_fetch_row($query_result)){
                        echo '<li>';
                        echo $row[0].' '.$row[1];
                        echo '</li>';
                    }

                ?>
            </ul>
        </section>
        <section id="right">
            <h2>
                Pełne dane: Fiat
            </h2>
            <?php
                $query = "SELECT * FROM samochody WHERE marka = 'Fiat'";
                $query_result = mysqli_query($polaczenie, $query);
                while ($row=mysqli_fetch_row($query_result)){
                    echo $row[0].'/'.$row[1].'/'.$row[2].'/'.$row[3].'/'.$row[4].'/'.$row[5];
                    echo '<br>';
                }
                mysqli_close($polaczenie);
            ?>
        </section>
    </main>
    <footer>
        <table>
            <tr>
                <td>
                    <a href="kwerendy.txt">Kwerendy</a>
                </td>
                <td>
                    Autor: PESEL
                </td>
                <td>
                    <img src="auto.png" alt="komis samochodwy">
                </td>
            </tr>
        </table>
    </footer>
</body>
</html>