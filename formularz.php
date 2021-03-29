<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <title>Formularz obliczania wartości zmówienia</title>
</head>
    
<body>
    <div class="container">
    <center>
            <h1>Obliczanie wartości zmówienia</h1>
            <form action="zamowienie.php" method="post">

                Podaj ilość produktu:
                <input type="text" name="ilosc" /><br />
                Podaj cenę produktu:
                <input type="text" name="cena"/><br />

                <input style="margin-top:3vh" type="submit" value="Kalkuluj wartość zamówienia"/>
            </form>
    </center>                                                                                         
    </div>
</body>
</html>