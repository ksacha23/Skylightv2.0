<?php
    include_once 'header.php';
?>

<h2>Application Request Form</h2>
<form id="appForm" action="app.php" method="POST">
    <div class="container"></div>

    <!-- Application Name (REQUIRED) -->
    <div class="form_group">
        <label for="appName">Application Name</label><br>
        <input type="text" id="appName" name="appName" required><br><br>
    </div>

    <!-- Developer Name (REQUIRED) -->
    <div class="form_group">
        <label for="devName">Developer</label><br>
        <input type="text" id="devName" name="devName" required><br><br>
    </div>

    <!-- Price (REQUIRED) -->
    <div class="form_group">
        <label for="price">Price</label><br>
        <input type="text" id="price" name="price" required><br><br>
    </div>

    <!-- Genre (REQUIRED) -->
    <div class="form_group">
        <label for="genre">App Genre</label><br>
        <input type="text" id="genre" name="genre" required><br><br>
    </div>

    <!-- Developer Site URL (REQUIRED) -->
    <div class="form_group">
        <label for="devSite">Developer Website</label><br>
        <input type="url" id="devSiteURL" name="devSiteURL" required><br><br>
    </div>

    <!-- Application Platforms (REQUIRED) -->
    <div class="form_group">
        <label for="appPlatforms">What platforms does your application support?</label><br>
        <input type="text" id="appPlatforms" name="appPlatforms" required><br><br>
    </div>

    <!-- Application Versions (REQUIRED) -->
    <div class="form_group">
        <label for="appPlatformVersion">What versions of those platforms are supported by your application?</label><br>
        <input type="text" id="appPlatformVersion" name="appPlatformVersion" required><br><br>
    </div>

    <!-- Application Description (REQUIRED) -->
    <div class="form_group">
        <label for="appDescription">Please write a short description about your application.</label><br>
        <textarea form="appForm" id="appDescription" name="appDescription" required></textarea><br><br>
    </div>

    <!-- Submit Button -->
    <div class="form_group">
        <input type="submit" value="Submit">
    </div>
</form>