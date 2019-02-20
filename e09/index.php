<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dane o zwierzętach</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>
            ATLAS ZWIERZAT
        </h1>
    </header>
    <div id="form">
        <h2>
            Gromady
        </h2>
        <ol>
            <li>
                Ryby
            </li>
            <li>
                Płazy
            </li>
            <li>
                Gady
            </li>
            <li>
                Ptaki
            </li>
            <li>
                Ssaki
            </li>
        </ol>
        <form action="index.php" method="POST">
            <label for="gromada">Wybierz gromadę</label>
            <input type="number" name="gromada" id="gromada">
            <button type="submit">Wyświetl</button>
        </form>
    </div>
    <main>
        <div id="left">
            <img src="zwierzeta.jpg" alt="dzikie zwwierzęta">
        </div>
        <div id="center">
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'baza');
                if(isset($_POST['gromada'])){
                    $gromada = $_POST['gromada'];
                
                    switch($gromada){
                        case 1:
                            echo "<h2>RYBY</h2>";
                            break;
                        case 2:
                            echo "<h2>PŁAZY</h2>";
                            break;
                        case 3:
                            echo "<h2>GADY</h2>";
                            break;
                        case 4:
                            echo "<h2>PTAKI</h2>";
                            break;
                        case 5:
                            echo "<h2>SSAKI</h2>";
                            break;
                        default:
                            echo "";
                    }
                    $zapytanie = "SELECT gatunek, wystepowanie FROM zwierzeta WHERE Gromady_id=$gromada";
                    $result = mysqli_query($polaczenie, $zapytanie);
                    while($row=mysqli_fetch_row($result)){
                        echo "$row[0], $row[1]";
                        echo "</br>";
                    }
                }

            ?>
        </div>
        <div id="right">
            <h2>
                Wszystkie zwierzęta w bazie
            </h2>
            <?php
                $zapytanie = 'SELECT zwierzeta.id, zwierzeta.gatunek, gromady.nazwa FROM zwierzeta INNER JOIN gromady ON zwierzeta.Gromady_id = gromady.id';
                $result = mysqli_query($polaczenie, $zapytanie);
                while($row=mysqli_fetch_row($result)){
                    echo "$row[0], $row[1], $row[2]";
                    echo "</br>";
                }
                mysqli_close($polaczenie);
            ?>
        </div>
    </main>
    <footer>
        <a href="htttp://atlas-zwierzat.pl">Poznaj inne strony o zwierzętach</a>
        autor Atlasu zwierząt PESEL
    </footer>
</body>
</html>