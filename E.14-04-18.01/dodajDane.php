<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'ogloszenia');
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$zapytanie = "INSERT INTO uzytkownik (imie, nazwisko, telefon, email) VALUES ('".$imie."', '".$nazwisko."', '".$telefon."', '".$email."')";
mysqli_query($polaczenie, $zapytanie);

mysqli_close($polaczenie);
?>