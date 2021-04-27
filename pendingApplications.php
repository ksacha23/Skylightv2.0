<?php
    // Pending Applications Page
    // Kamil Sacha
    // Last Update: April 27, 2021

    // This page displays pending application requests for the Admin that they can either approve or reject
    session_start();
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    include_once 'header.php';

    $sql = "SELECT * FROM appRequests";
    $result = $conn -> query($sql);
    $row = $result->fetch_assoc();

    $rid = $row['requestId'];
    $name = $row['name'];
    $creator =  $row['creator'];
    $genre =  $row['genre'];
    $price =  $row['price'];
    $platforms = $row['platforms'];
    $version =  $row['version'];
    $description =  $row['description'];
    $appleLink =  $row['appleLink'];
    $googleLink =  $row['googleLink'];

    echo "  <p>Name: ".$name."</p>
            <p>Creator: ".$creator."</p>
            <p>Genre: ".$genre."</p>
            <p>Price: ".$price."</p>
            <p>Platforms: ".$platforms."</p>
            <p>Version: ".$version."</p>
            <p>Description: ".$description."</p>
            <p>Apple App Store Link: ".$appleLink."</p>
            <p>Google Play Store Link: ".$googleLink."</p>
    
            <form method=post>
                <input type='submit' name='approve' value='Approve'>
                <input type='submit' name='reject' value='Reject'>
            </form>";

    if(isset($_POST['approve'])){
        echo "App Aproved";
        approveAppRequest($conn, $appName, $creator, $platforms, $version, $appleLink, $googleLink, $price, $genre, $description);

    }else if(isset($_POST['reject'])){
        echo "App Rejected";
    }