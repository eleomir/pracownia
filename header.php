<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Pracownia psychologiczna Nowe Horyzonty</title>
<meta name="keywords" content="gabinet psychologiczny, gabinet psychologiczny szamotuły, psycholog szamotuły" />
<meta name="description" content="Pracownia psychologiczna Nowe Horyzonty w Szamotułach" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="#">Pracownia psychologiczna Nowe Horyzonty</a></h1>
	</div>
	<!-- end header -->
	<?php 

	$t = isset($_GET["t"]) ? $_GET["t"] : "";
	?>
	<div id="menu">
		<ul>
			<li 
			<?php if ($t=="main") echo 'class="active"'; ?> ><a href="index.php?t=main">Strona główna</a></li>
			<li 
			<?php if ($t=="about") echo 'class="active"'; ?> ><a href="index.php?t=about">O mnie</a></li>
			<li 
			<?php if ($t=="off") echo 'class="active"'; ?> ><a href="index.php?t=off">Oferta</a></li>
			<li 
			<?php if ($t=="prc") echo 'class="active"'; ?> ><a href="index.php?t=prc">Rejestracja online</a></li>
			<li 
			<?php if ($t=="cont") echo 'class="active"'; ?> ><a href="index.php?t=cont">Kontakt</a></li>
			<li> 
			<a href="http://ulnowa2.blogspot.com/" target ="_blank">Blog</a></li>
		</ul>
	</div>
	<!-- end menu -->
	
