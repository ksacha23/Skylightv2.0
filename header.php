<?php
	// Header for each page
	// Kamil Sacha
	// Last Update: April 25, 2021

	// This header will appear on every page. It includes all the styling for the website and will adjust based on the type of user accesing the page
    session_start();
	include 'dbh.inc.php';
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
			$username = $_SESSION["useruid"];
			$sql = "SELECT * FROM users WHERE userUid = '$username';";
			$result = $conn -> query($sql);
			$row = $result ->fetch_assoc();

			$adminStatus = $row['isAdmin'];
			if(isset($_SESSION["useruid"]) && $adminStatus == 1){
				echo "<h3>Hello there " . $_SESSION["useruid"] . "! ADMIN</h3>";
				echo "<a href='logout.inc.php'><button>Log Out</button></a>";
				echo "</header>
				<hr>
				<nav>
					<a href='index.php'>Home</a>
					<a href='appPage.php'>Discover</a>
					<a href='applicationRequestForm.php'>Submit an App Request</a>
					<a href='pendingApplications.php'>Pending Applications</a>
					<a href='help.php'>Help</a>
					<a href='adminHelp.php'>Admin Resources</a>
				</nav>";
			}else if(isset($_SESSION["useruid"]) && $adminStatus == 0){
                echo "<h3>Hello there " . $_SESSION["useruid"] . "!</h3>";
                echo "<a href='logout.inc.php'><button>Log Out</button></a>";
				echo "</header>
				<hr>
				<nav>
					<a href='index.php'>Home</a>
					<a href='appPage.php'>Discover</a>
					<a href='applicationRequestForm.php'>Submit an App Request</a>
					<a href='help.php'>Help</a>
				</nav>";
            }else{
                echo "<h3 id='slogan'>Discover something new</h3>";
                echo "<a href='signIn.php'><button>Sign In</button></a>";
                echo "<a href='registration.php'><button>New User</button></a>";
				echo "</header>
				<hr>
				<nav>
					<a href='index.php'>Home</a>
					<a href='appPage.php'>Discover</a>
					<a href='applicationRequestForm.php'>Submit an App Request</a>
					<a href='help.php'>Help</a>
				</nav>";
            }
        ?>	
	<hr>