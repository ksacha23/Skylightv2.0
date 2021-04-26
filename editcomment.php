<?php

    // Edit Comment Page
    // Kamil Sacha
    // Last Update: April 26, 2021

    include_once 'header.php';
    include_once 'dbh.inc.php';

    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];


    // action will not work with this form
    echo "<form method='POST'>
                <input type='hidden' name='cid' value='".$cid."'>
                <input type='hidden' name='uid' value='".$uid."'>
                <input type='hidden' name='date' value='".$date."'>
                <textarea name='message'>".$message."</textarea><br><br>
                <button name='commentSubmit' type='submit'>Edit</button>
            </form>";