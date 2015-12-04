<?php

$dbHost="mysql-dadidouteam.alwaysdata.net";
$dbLogin="115957";
$dbPass="ceciestunmotdepasseenclair";
$dbBd ='dadidouteam_default';
$dbLink = mysqli_connect($dbHost, $dbLogin, $dbPass)or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

?>

<?php
mysqli_select_db($dbLink , $dbBd)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>

<?php
/*$sql = 'SELECT * FROM News';
$query=mysqli_query($dbLink,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
while($dbRow=mysqli_fetch_assoc($query)){
	echo $dbRow['ID']." ". $dbRow['Titre'] ." ". $dbRow['Region'] ." ". $dbRow['gravite'] ." ". $dbRow['Type'] ." ". $dbRow['Date'] ." ". $dbRow['Statut'] ;
   }*/
?> 
<?php
	
	function takeText()
	{
		$dbHost="mysql-dadidouteam.alwaysdata.net";
		$dbLogin="115957";
		$dbPass="ceciestunmotdepasseenclair";
		$dbBd ='dadidouteam_default';
		
		$dbLink = mysqli_connect($dbHost, $dbLogin, $dbPass)or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
		
		$Today= date('Y-m-d');
		$sql = "SELECT Titre, Region FROM News WHERE Date = CURRENT_DATE ";
		mysqli_select_db($dbLink , $dbBd)or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
		$query=mysqli_query($dbLink,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());		
		$valReturn;
		while($dbRow=mysqli_fetch_assoc($query)){
			$valReturn = $dbRow['Type'] . ' ' . $dbRow['Titre'] . ' ' . $dbRow['Region'] . ' ' . $dbRow['gravite'];
			return $valReturn;
		}
		
	}
?>