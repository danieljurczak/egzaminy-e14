<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'ogloszenia');
$kategoria = $_POST['kategoria'];
$podkategoria = $_POST['podkategoria'];
$tytul = $_POST['tytul'];
$tresc = $_POST['tresc'];
$zapytanie = "INSERT INTO ogloszenie (uzytkownik_id, kategoria, podkategoria, tytul, tresc) VALUES (1,".$kategoria.", ".$podkategoria.", '".$tytul."', '".$tresc."')";
mysqli_query($polaczenie, $zapytanie);

mysqli_close($polaczenie);
?>