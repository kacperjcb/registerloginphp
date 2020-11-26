<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukces</title>
</head>
<body>
    
</body>
</html>
<?php
require("polaczenie.php");
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$wiek=$_POST['wiek'];
$haslo=$_POST['haslo'];
$email=$_POST['email'];
$sql="INSERT INTO dane (numer,imie, nazwisko, wiek, haslo, email) VALUES ('','$imie','$nazwisko','$wiek','$haslo','$email')";
$result = $connect->query($sql);
?>
<span style="font-size: xx-large">Cześć <?php echo $imie;  ?> - Twoja rejestracja przebiegła pomyślnie </span>

