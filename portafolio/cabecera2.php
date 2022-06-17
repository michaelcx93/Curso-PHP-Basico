<?php
session_start();
if ( isset($_SESSION['user'])!="michael"){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<!--
Template Name: Nekmit
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
	<title>Business</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
</head>

<body id="top">
    
        
		<header id="header" class="hoc clear">
			<div id="logo" class="fl_left">
				<!-- ################################################################################################ -->
				<h1><a href="index.html">Logo</a></h1>
				<!-- ################################################################################################ -->
			</div>
			<nav id="mainav" class="fl_right">
				<!-- ################################################################################################ -->
				<ul class="clear">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a class="drop" href="index2.php">Conoce Más</a>
						<ul>
							<li><a href="pages/gallery.html">Galeria</a></li>
							<!-- <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li> -->
						</ul>
					</li>
					<li><a class="drop" href="#">Menu</a>
						<ul>
							<li><a href="#">Level 2</a></li>
							<li><a class="drop" href="#">Level 2 + Drop</a>
								<ul>
									<li><a href="#">Level 3</a></li>
									<li><a href="#">Level 3</a></li>
									<li><a href="#">Level 3</a></li>
								</ul>
							</li>
							<li><a href="#">Level 2</a></li>
						</ul>
					</li>
					<li><a href="portafolio.php"> Portafolio</a></li>
					<li><a href="cerrar.php"> Cerrar</a></li>
					<li><a href="#">Link Text</a></li>
				</ul>
				<!-- ################################################################################################ -->
			</nav>
		</header>
        <div class="container">



</body>

</html>