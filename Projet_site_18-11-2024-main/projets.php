<?php 
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Arcelia Osorio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Nav -->
		<nav id="nav">
				<ul class="container">
					<li><a href="index.php">Présentation</a></li>
					<li><a href="projets.php">Projets</a></li>
				</ul>
			</nav>

			<h3> <?php echo $projets[0]['name']?> </h3>
			<p> <?php echo $projets[0]['competence']?> </p>
			<p> <?php echo $projets[0]['duree']?> </p>
			<p> <?php echo $projets[0]['description']?> </p>
			<p> <?php echo $projets[0]['dates']?></h1> </p>
			<h1> <img src="<?php echo $projets[0]['image']?>" alt="">

		
    </body>
    