<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="with=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
		<link rel="stylesheet" href="css/style.css">

		<title>
			Paul Burkart - Full Stack Web Developer
		</title>
	</head>

	<body>
		<nav>
			<div class='logo'>
				<img src="img/portrait.jpg" alt="User">
			</div>
			<ul>
				<li><a href="about.php">About</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				<li><a href="contact.php">Contact</a></li>
				<?php
					if(isset($_SESSION['username'])){
						echo "<li class='logout'><a href='logout.php'>Logout</a></li>";
					}
				?>
			</ul>
		</nav>
