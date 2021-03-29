<?php
        $ilosc = $_POST['ilosc'];
        $cena = $_POST['cena'];
        $suma = $ilosc * $cena;

        echo "Podaj ilość produktów: $ilosc <br/>";
        echo "Podaj cenę: $cena <br/><br/>";
        echo "Wartość zamówienia: $suma";            
?>