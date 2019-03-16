<?php
    $polaczenie=mysqli_connect('localhost','root','','BIURO_POLAN');
    $query = 'SELECT miejsce, ilosc_dni, koszt, transport FROM wycieczki ORDER BY(ilosc_dni) DESC;';
    $query_result = mysqli_query($polaczenie, $query);
    echo '<table>';
    echo '<tr>';
    echo '<th>';
    echo 'L.p.';
    echo '</th>';
    echo '<th>';
    echo 'Miejscowość';
    echo '</th>';
    echo '<th>';
    echo 'Ilość dni';
    echo '</th>';
    echo '<th>';
    echo 'Koszt';
    echo '</th>';
    echo '<th>';
    echo 'Transport';
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
?>

