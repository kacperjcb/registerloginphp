<?php  
 require('polaczenie.php');

if (isset($_POST['email']) and isset($_POST['password'])){
	
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `dane` WHERE email='$email' and haslo='$password'";
 
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$count = mysqli_num_rows($result);

if ($count == 1){


echo '<h2>'."Sukces - udało się zalogować".'</h2>';

}else{
echo '<h2>'."Błędne hasło lub login".'<h2>';

}
}
?>