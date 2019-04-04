<?php
$polaczenie = mysqli_connect("localhost", "root", "", "dane");
if (!$polaczenie) {
    die("Connection failed: " . mysqli_connect_error());
}

$tytul = $_POST['tytul'];
$gatunek = $_POST['gatunek'];
$rok = $_POST['rok'];
$ocena = $_POST['ocena'];
$zapytanie  = "INSERT INTO filmy(gatunki_id, tytul, rok, ocena) VALUES ('$gatunek', '$tytul', '$rok', '$ocena')";
if (mysqli_query($polaczenie, $zapytanie)) {
    echo "Film $tytul został dodany do bazy </br>";
} else {
    echo "Error: " . $zapytanie . "<br>" . mysqli_error($polaczenie);
}

mysqli_close($polaczenie);
?>