<?php
    if (isset($_GET['miejscowosc'])){
        $miejscowosc = $_GET['miejscowosc'];
        $polaczenie=mysqli_connect('localhost','root','','BIURO_POLAN');
    $query = "SELECT klient.imie, klient.nazwisko, wycieczki.miejsce, wycieczki.id FROM wycieczki, klient INNER JOIN wyjazd ON klient.id = wyjazd.klient_id WHERE wycieczki.miejsce='$miejscowosc'";
    $query_result = mysqli_query($polaczenie, $query);
    echo '<table>';
    echo '<tr>';
    echo '<th>';
    echo 'L. p.';
    echo '</th>';
    echo '<th>';
    echo 'Imie';
    echo '</th>';
    echo '<th>';
    echo 'Nazwisko';
    echo '</th>';
    echo '<th>';
    echo 'Adres';
    echo '</th>';
    echo '<th>';
    echo 'ID wycieczki';
    echo '</th>';
    echo '</tr>';
    $porzadek = 0;
    while($row = mysqli_fetch_row($query_result)){
        $porzadek = $porzadek + 1;
        echo '<tr>';
        echo '<td>';
        echo $porzadek;
        echo '</td>';
        echo '<td id="m_'.$row[0].'">';
        echo $row[0];
        echo '</td>';
        echo '<td>';
        echo $row[1];
        echo '</td>';
        echo '<td  id="c_'.$row[0].'">';
        echo $row[2];
        echo '</td>';
        echo '<td>';
        echo $row[3];
        echo '</td>';
        echo '</tr>';

    }

    echo '</table>';
    mysqli_close($polaczenie);

    }
    ?>

