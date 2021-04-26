<?php
	// Header for each page
	// Kamil Sacha
	// Last Update: April 25, 2021
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
	<title>Skylight</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
	<header>
		<h1 id="webTitle">Skylight</h1>
        <?php
            if(isset($_SESSION["useruid"])){
                echo "<h3>Hello there " . $_SESSION["useruid"] . "!</h3>";
                echo "<a href='logout.inc.php'><button>Log Out</button></a>";
            }else{
                echo "<h3 id='slogan'>Discover something new</h3>";
                echo "<a href='signIn.php'><button>Sign In</button></a>";
                echo "<a href='registration.php'><button>New User</button></a>";
            }
        ?>	
	</header>
	<hr>
	<nav>
		<a href="index.php">Home</a>
		<a href="appPage.php">Discover</a>
		<a href='applicationRequestForm.php'>Submit an App Request</a>
	</nav>
	<hr>