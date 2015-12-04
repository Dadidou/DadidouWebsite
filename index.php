<?php 
	include 'PHP/baseNews.php';
	include 'utils.inc.php';
	start_page(Dadidou);
	$var = takeText ();
?>
	<head> 
		<script language="JavaScript">
		<!--
		//PLF-http://www.monjavascript.net/
		var position=0;
		var msg= <?php echo (string)  $var ;?>
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
		<article>
			<h2 id="legende"> Légende </h2>
			<ul id="gravite">
				<li>
					<!-- img couleur-->
					<p> : Grande gravité </p>
				</li>
				<li>
					<!-- img couleur-->
					<p> : Moyenne gravité </p>
				</li>
				<li>
					<!-- img couleur-->
					<p> : Faible gravité </p>
				</li>
			</ul>
			<ul id="etat">
				<li>
					<!-- img couleur-->
					<p> : En cours </p>
				</li>
				<li>
					<!-- img couleur-->
					<p> : Terminé </p>
				</li>
				<li>
					<!-- img couleur-->
					<p> : Alerte </p>
				</li>
			</ul>
		</article>
	<?php end_page(); ?>
	</body>
</html>