<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restauracja Kulinaria.pl</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h2>
            Restauracja Kulinaria.pl zaprasza!
        </h2>
    </header>
    <main>
        <div id="left">
            <p>
                Dania mięsne zamówisz już

                <?php
                    $polaczenie = mysqli_connect("localhost", "root", "", "baza");
                    if (!$polaczenie) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $zapytanie = "SELECT MIN(cena) FROM dania WHERE typ=2;";
                    $result = mysqli_query($polaczenie, $zapytanie);
                    if ($result) {
                        while ($row=mysqli_fetch_row($result))
                        {
                        printf ("%s",$row[0]);
                        }
                    } 
                                            
                    else {
                        echo "Error: " . $zapytanie . "<br>" . mysqli_error($polaczenie);
                    }
                        
                    
                    
                    
                    
    
                ?>
                złotych.
            </p>
            <img src="menu.jpg" alt="Pyszne spaghetti">
            <a href="menu.jpg">Pobierz obraz</a>
        </div>
        <div id="center">
            <h3>
                Przekąski
            </h3>
            <?php
            $zapytanie = "SELECT id, nazwa, cena FROM dania WHERE typ=3";
            $result = mysqli_query($polaczenie, $zapytanie);
                    if ($result) {
                        while ($row=mysqli_fetch_row($result))
                        {
                        printf ("<p>%s %s %s</p>\n",$row[0],$row[1], $row[2]);
                        }
                    } else {
                        echo "Error: " . $zapytanie . "<br>" . mysqli_error($polaczenie);
                    }
                
            ?>
        </div>
        <div id="right">
            <h3>
                Napoje
            </h3>
            <?php

            $zapytanie = "SELECT id, nazwa, cena FROM dania WHERE typ=4";
            $result = mysqli_query($polaczenie, $zapytanie);
            if ($result) {
                while ($row=mysqli_fetch_row($result))
                {
                printf ("<p>%s %s %s</p>\n",$row[0],$row[1], $row[2]);
                }
            } else {
                echo "Error: " . $zapytanie . "<br>" . mysqli_error($polaczenie);
            }
            mysqli_close($polaczenie);

            ?>
        </div>
    </main>
    <footer>
        Stronę internetową opracował <i>PESEL</i>
    </footer>
</body>
</html>