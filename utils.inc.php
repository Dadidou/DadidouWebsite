<?php function start_page ($title)
{ 
	echo '<!DOCTYPE html>
		  <html lang="fr">
			<head>
				<meta charset="UTF-8"></meta>
				<title>' . $title .  '</title>
				<link rel="stylesheet" href="CSS/style.css"></link>
				<link href="Images/favicon.ico" rel="shortcut icon"></link>
			</head>';
};
?>
<?php function end_page ()
{ 
	echo '<footer>
			<p>
				Copyright © 2015 Stéphane Nativel, Amélie Lupo, Camille Liccia, 
				Florent Courouble, Adrien Pupier, Julien Marie, Alexandre Moutouh, Peio Rigaux
			</p>
		</footer>';
};
?>
