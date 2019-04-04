<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Biuro podróży "POLAN"”</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            <a href="biuro.php"> Biuro podróży "POLAN"</a>
        </h1>
    </header>
    <div id="left">
        <h4>
            Wybierz opcję
        </h4>
        <ul>
            <li>
                <a href="biuro.php">Strona główna</a>
            </li>
            <li>
                <a href="formularz.php">Dodaj wycieczkę</a>
            </li>
            <li>
                <a href="lista.php">Wyświetl listę cuzestników wycieczki</a>
            </li>
            <li>
                <a href="galeria.php">Galeria</a>
            </li>
            <li>
                <a href="mailto:biuro@polan.pl">Wyślij wiadomość</a>
            </li>    
        </ul>
    </div>
    <div id="center">
        <?php
            include('skrypt1.php');

        ?>
        <select name="wycieczka" id="wycieczka" onchange="aktualizuj()">
            <option value="brak"></option>
            <option value="Londyn">Londyn</option>
            <option value="Praga">Praga</option>
            <option value="Berlin">Berlin</option>
            <option value="Barcelona">Barcelona</option>
            <option value="Kudawa">Kudawa</option>
        </select>
        <input type="text" name="cena" id="cena">
        <input type="number" name="ilosc" min="0" max="55" id="ilosc"  onchange="aktualizuj2()">
        <input type="text" name="koszt" id="koszt">


    </div>
    <div id="right">
        <h4>
            Promocje tygodnia
        </h4>
        <h5>
            Zakopane
        </h5>
        <a href="images/m_zakopane.jpg"><img height="165px" width="220px" src="images/m_zakopane.jpg" alt="Zakopane"></a>
        <h5>
            Praga
        </h5>
        <a href="images/m_praga.jpg"><img height="165px" width="220px" src="images/m_praga.jpg" alt="Praga"></a>
        
    </div>
    <footer>
        <p>
            Stronę wykonał: Daniel Jurczak
        </p>
    </footer>
    <script src="kalkulator.js">
        
    </script>
</body>
</html>