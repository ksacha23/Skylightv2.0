<?php
// Comment Section Functions
// Kamil Sacha
// Last Update: April 26, 2021

// This file helps present the comment sections on each app page

"<link rel='stylesheet' href='style.css' type='text/css'>";

function setComments($conn){
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message');";
        $result = $conn -> query($sql);
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comments;";
    $result = $conn -> query($sql);
    while($row = $result->fetch_assoc()){
        $id = $row['uid'];
        $sql2 = "SELECT * FROM users WHERE userId = '$id';";
        $result2 = $conn -> query($sql2);
        if($row2 = $result2->fetch_assoc()){
            echo "<div class='comment-box'><p>";
            echo $row2['userUid']."<br>";
            echo $row['date'] . "<br><br>";
            echo nl2br($row['message']);
            echo "</p>";

            if(isset($_SESSION['useruid'])){
                if($row2['isAdmin'] == 0){
                    echo"<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
                            <input type='hidden' name='cid' value='".$row['cid']."'>
                            <button type='submit' name='commentDelete'>Delete</button>
                        </form>
                        <form class='edit-form' method='POST' action='editcomment.php'>
                            <input type='hidden' name='cid' value='".$row['cid']."'>
                            <input type='hidden' name='uid' value='".$row['uid']."'>
                            <input type='hidden' name='date' value='".$row['date']."'>
                            <input type='hidden' name='message' value='".$row['message']."'>
                            <button>Edit</button>
                        </form>";
                }else if($_SESSION['useruid'] == $row2['userUid']){
                    echo"<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
                            <input type='hidden' name='cid' value='".$row['cid']."'>
                            <button type='submit' name='commentDelete'>Delete</button>
                        </form>
                        <form class='edit-form' method='POST' action='editcomment.php'>
                            <input type='hidden' name='cid' value='".$row['cid']."'>
                            <input type='hidden' name='uid' value='".$row['uid']."'>
                            <input type='hidden' name='date' value='".$row['date']."'>
                            <input type='hidden' name='message' value='".$row['message']."'>
                            <button>Edit</button>
                        </form>";
                }

            }
            echo "</div>";           
        }
    }
}

function editComments($conn){
    if(isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
        $result = $conn -> query($sql);

        header("Location: spotifyAppPage.php");
    }
}

function deleteComments($conn){

    if(isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];

        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $conn -> query($sql);

        header("Location: spotifyAppPage.php");
    }
}