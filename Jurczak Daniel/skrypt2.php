<?php

$polaczenie = mysqli_connect('localhost', 'root', '', 'BIURO_POLAN');
if ($polaczenie == FALSE) {
    die("Dodawanie danych nie powiodło się");
    echo 'Dodawanie danych nie powiodło się';
}
else {
    $miejscowosc = $_GET['miejscowosc'];
    $ilosc_dni = $_GET['ilosc_dni'];
    $transport = $_GET['transport'];
    $koszt = $_GET['koszt'];
    $query = "INSERT INTO wycieczki(`ilosc_dni`, `koszt`, `miejsce`, `transport`) VALUES ($ilosc_dni, $koszt, '$miejscowosc', '$transport')";
    $query_result = mysqli_query($polaczenie, $query);

}
echo "Dodane pomyślnie wycieczkę do bazy";
mysqli_close($polaczenie);
?>


