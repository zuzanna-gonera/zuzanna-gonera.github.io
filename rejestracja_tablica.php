<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Zuzanna Gonera">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Sklep internetowy, Yoga, Joga, Akcesoria do jogi, Odzież do jogi">
    <meta name="description" content="Sklep internetowy z akcesoriami do jogi">
    <title>Formularz rejestracji - wyniki</title>
</head>
<body>
    
<?php 

    $email = $_POST['email'];
    $login = $_POST['login'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $kod_pocztowy = $_POST['kod'];
    $adres = $_POST['adres'];
    $miasto = $_POST['miasto'];
    $numer = $_POST['numer'];
    
    $imie = ucfirst($imie);
    $nazwisko = ucfirst($nazwisko);
    $adres = ucfirst($adres);
    $miasto = ucfirst($miasto);
    
echo<<<END
    <h2>Formularz rejestracji - wyniki</h2>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>Adres e-mail</td>
        <td>$email</td>
    </tr>
    <tr>
       <td>Login</td>
       <td>$login</td>
    </tr>
    <tr>
       <td>Imie</td>
       <td>$imie</td>  
    </tr>
    <tr>
        <td>Nazwisko</td>
        <td>$nazwisko</td>
    </tr>
    <tr>
        <td>Kod pocztowy</td>
        <td>$kod_pocztowy</td>
    </tr>
    <tr>
        <td>Adres</td>
        <td>$adres</td>
    </tr>
    <tr>
        <td>Miasto</td>
        <td>$miasto</td>
    </tr>
    <tr>
        <td>Numer telefonu</td>
        <td>$numer</td>
    </tr> 
    </table>  

END;

    date_default_timezone_set('Europe/Warsaw');
    echo ucfirst($imie).", zamówienie zostało przyjete o godzinie ".date('H:i:s') . " dnia ". date("d.m.Y") . " i zostanie wysłane na adres ". ucfirst($adres) . " ". ucfirst($miasto) ;
?>
    
</body>
</html>