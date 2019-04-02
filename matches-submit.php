<!--
Tariq Cranston

Description:
Read name as GET query parameter and also find which other singles matches the given user.

Features:
Header logo and user matches
-->

<?php include("top.html"); ?>

<h1>Matches for <?= $_GET["name"] ?></h1>
<div class='match'>
    <?php printMatchesFromFile(); ?>
</div>

<?php include("bottom.html"); ?>

<!-- PHP FUNCTIONS START-->
<?php

/**
 * Read the name from the page's "name" query parameter and finds which other singles match the given user.
 * Output the HTML to display the matches, in the order they were originally found in the file.
 * Each match has the image user.jpg, the person's name, and an unordered list with their gender, age, personality type,
 * and OS.
 */
function printMatchesFromFile()
{
    //$_GET and $_POST are superglobals. They do not need to be passed as a function parameter.

    // retrieves user's info from singles.txt file
    $loginUser = "";
    foreach (file("singles.txt", FILE_IGNORE_NEW_LINES) as $loginUser) {
        // "name" query parameter is used to find the remaining user info
        if ($_GET["name"] == explode(",", $loginUser)[0]) {
            break;
        }
    }
