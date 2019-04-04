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
        <h4>
            Dodaj wycieczke zagraniczna
        </h4>
        <form action="formularz.php" onsubmit="return sprawdz()">
            <label for="miejscowosc">Miejscowość: </label>
            <select name="miejscowosc" id="miejscowosc">
                <option value="puste"></option>
                <option value="Berlin">Berlin</option>
                <option value="Praga">Praga</option>
                <option value="Londyn">Londyn</option>
            </select> <br>
            <label for="ilosc_dni">Ilość dni: </label>
            <select name="ilosc_dni" id="ilosc_dni">
                <option value="puste"></option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br>
            <label for="transport">Transport: </label>
            <select name="transport" id="transport">
                <option value="puste"></option>
                <option value="autokar">autokar</option>
                <option value="samolot">samolot</option>
            </select><br>
            <label for="koszt">Koszt: </label>
            <input type="number" name="koszt" id="koszt" min="100" max="1500"><br>
            <button type="submit" onclick="sprawdz()">dodaj</button> 
            <button type="reset">wyczysc</button>
        </form>
        <span id="skrypt">
        
        </span>
        <?php
            include('skrypt2.php');
        ?>
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
    <script src="walidacja.js">
    </script>
</body>
</html>