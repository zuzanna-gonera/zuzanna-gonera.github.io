<?php
        $ilosc = $_POST['ilosc'];
        $wartosc = $_POST['wartosc'];
        $suma = $ilosc * $wartosc;

        echo "Ile produktu: $ilosc <br/>";
        echo "Jaka wartosc: $wartosc <br/><br/>";
        echo "Suma zamówienia: $suma";            
?>