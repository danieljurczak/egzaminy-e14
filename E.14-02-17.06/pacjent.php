<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Poradnia</title>
    <link rel="stylesheet" href="poradnia.css">
</head>
<body>
    <header>
        <h1>
            LEKARZE SPECJALIŚCI
        </h1>
    </header>
    <aside>
        <h3>
            LEKARZE SPECJALIŚCI
        </h3>
        <table>
            <tr>
                <td colspan="2">
                    Poniedziałek
                </td>
            </tr>
            <tr>
                <td>
                    Anna Kowalska
                </td>
                <td>
                    otolaryngolog
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Wtorek
                </td>
            </tr>
            <tr>
                <td>
                    Jan Nowak
                </td>
                <td>
                    kardiolog
                </td>
            </tr>
        </table>
        <h3>
            LISTA PACJENTÓW
        </h3>
        <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'poradnia');
            $query = 'SELECT id, imie, nazwisko, choroba FROM pacjenci';
            $query_result = mysqli_query($polaczenie, $query);
            while($row = mysqli_fetch_row($query_result)){
                echo $row[0].' '.$row[1].' '.$row[2].' '.$row[3].'<br>';
            }
        ?>
        <br><br>
        <form action="pacjent.php">
            Podaj id: <br>
            <input type="number" name="id">
            <button type="submit">Pokaż szczegóły</button>
        </form>
    </aside>
    <main>
        <h2>
            KARTA PACJENTA
        </h2>
        <?php
            $id = $_GET['id'];
            $query = 'SELECT imie, nazwisko, leki_przepisane, opis FROM pacjenci WHERE id='.$id;
            $query_result = mysqli_query($polaczenie, $query);
            while($row = mysqli_fetch_row($query_result)){
                echo '<p>';
                echo 'Imię i nazwisko: '.$row[0].' '.$row[1];
                echo '</p>';  
                echo '<p>';
                echo 'Przepisane leki: '.$row[2];
                echo '</p>';  
                echo '<p>';
                echo 'Opis choroby: '.$row[3];
                echo '</p>';  
            }
            mysqli_close($polaczenie);
        ?>
    </main>
    <footer>
        <p>
            utworzone przez: PESEL
        </p>
        <a href="kwerendy.txt">Kwerendy do pobrania</a>
    </footer>
</body>
</html>