<?php
    include_once 'header.php';
?>

<h2>Application Request Form</h2>
<form action="request.inc.php" method="post">

        <label for="appName">Application Name</label><br>
        <input type="text" name="appName" required><br><br>

        <label for="devName">Developer</label><br>
        <input type="text" name="developer" required><br><br>

        <label for="price">Price</label><br>
        <input type="text" name="price" required><br><br>

        <label for="genre">App Genre</label><br>
        <input type="text" name="genre" required><br><br>

        <label for="appleSite">Apple App Store Link</label><br>
        <input type="text" name="appleSite" required><br><br>

        <label for="googleSite">Google Play Store Link</label><br>
        <input type="text" name="googleSite" required><br><br>

        <label for="appPlatforms">What platforms does your application support?</label><br>
        <input type="text" name="platforms" required><br><br>

        <label for="version">Latest Version: </label><br>
        <input type="text" name="version" required><br><br>

        <label for="appDescription">Please write a short description about your application.</label><br>
        <input type="text" name="appDescription" required><br><br>

        <button type="submit" name="submitRequest">Submit</button>
</form>

<?php

if(isset($_GET["error"])){
    if($_GET["error"] == "none"){
        echo "<p>App Request Received!</p>";
    }
}

?>