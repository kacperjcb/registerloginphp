<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>


<form action="wyslij.php" method="POST">
<p>Podaj imię: <input type="text" name='imie' /></p>
<p>Podaj nazwisko: <input type="text" name='nazwisko' /></p>
 <p>Podaj wiek: <input type="number" name='wiek' /></p>
 <p>Podaj hasło:<input type="password" name='haslo'> </p>
 <p>Podaj maila który będzie twoim loginem: <input type="email" name='email' /> </p>
<button type="submit"> Dodaj użytkownika </button>
</form>

</body>
</html>