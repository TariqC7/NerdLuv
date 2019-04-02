<!--
Tariq Cranston

Description:
Login page for NerdLuv

Features:
Header logo, log in form, and also you're able to view the user's matches
-->

<?php include("top.html"); ?>

<form action="matches-submit.php" method="get">

    <fieldset>
        <legend>Returning User:</legend>

        <ul>
            <li>
                <!--
                Name: A label and 16-letter box for the user to type a
                name. Initially empty. Submit to the server as a query
                parameter name.
                -->
                <strong>Name:</strong>
                <input type="text" name="name" size="16"/>
            </li>
        </ul>

        <!--
        When the user presses "View My Matches," the form submits
        its data as a GET request to matches-submit.php. The
        name of the query parameter sent should be name, and its
        value should be the encoded text typed by the user. For
        example, when the user views matches for Jiang Li,
        the URL should be:
        matches-submit.php?name=Jiang+Li
        -->
        <input type="submit" value="View My Matches"/>
    </fieldset>
</form>

<?php include("bottom.html"); ?>
