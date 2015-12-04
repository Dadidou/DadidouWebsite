<?php
$dbHost="mysql-dadidouteam.alwaysdata.net";
$dbLogin="115957";
$dbPass="ceciestunmotdepasseenclair";
$dbBd ='dadidouteam_default';
$dbLink = mysqli_connect($dbHost, $dbLogin, $dbPass)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
?>

<?php
mysqli_select_db($dbLink , $dbBd)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>

<?php
$sql = 'SELECT Titre, Region FROM News WHERE Date=sysdate';
$query=mysqli_query($dbLink,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

?>