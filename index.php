<?php 
	include 'PHP/baseNews.php';
        require 'utils.inc.php';
	//include 'utils.inc.php';
	//start_page(Dadidou);


echo '<!DOCTYPE html><html lang="fr">
	<head> ' ;
	$var = takeText() ;	?>
		<script language="JavaScript">
		
		var position=0;
		var msg= '<?php echo $var;?>';
		var msg="     "+msg;
		var longue=msg.length;
		var fois=(70/msg.length)+1;
		for(i=0;i<=fois;i++) msg+=msg;
		function textdefil() {
			document.form1.deftext.value=msg.substring(position,position+2000);
			position++;
			if(position == longue) position=0;
			setTimeout("textdefil()",100);
		}
		window.onload = textdefil;
		//-->
		</script>
           <meta charset="UTF-8"></meta>
	<title>"Notice Me!"</title>
	<link rel="stylesheet" href="css/style.css"></link>
	<link href="Images/favicon.ico" rel="shortcut icon"></link>     
	</head>
	<body>
		<form name="form1">
			<div align="center">
				<input type="text" name="deftext" size=200>
			</div>
		</form>
		<header>
			<h1 name="titre" id="titre"> Dadidou </h1>
			<div id="bandeau"></div>
		</header>
		<nav id="menu">
		</nav>
		<aside id="classification">
		</aside>
		<section id="carte">
		</section>
		<article id="legende">
			<h2> Légende </h2>
			<ul id="gravite">
				<li>
					<div id="grandeGravite"></div>
					<p id="grandeGravitep"> : Grande gravité </p>
				</li>
				<li>
					<!-- img couleur-->
					<div id="moyenneGravite"></div>
					<p id="moyenneGravitep"> : Moyenne gravité </p>
				</li>
				<li>
					<!-- img couleur-->
					<div id="faibleGravite"></div>
					<p id="faibleGravitep"> : Faible gravité </p>
				</li>
			</ul>
			<ul id="etat">
				<li>
					<div id="rond"></div>
					<p id="enCours"> : En cours </p>
				</li>
				<li>
					<!-- img couleur-->
					<div id="carre"></div>
					<p id="fini"> : Fini </p>
				</li>
				<li>
					<!-- img couleur-->
					<div id="triangle"></div>
					<p id="alerte"> : Alerte </p>
				</li>
			</ul>
		</article>
	<?php end_page(); ?>
	</body>
</html>
