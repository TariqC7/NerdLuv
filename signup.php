<!--
Tariq Cranston

Description:
Sign up for NerdLuv

Features:
Header logo and form to create new account
-->

<?php include("top.html"); ?>

<form action="signup-submit.php" method="post">
    <fieldset> <!--Group related elements in a form-->
        <legend>New User Signup:</legend>
        <ul>
            <li>
                <!--Name: A 16-character box for the user to type a name.-->
                <strong>Name:</strong>
                <input type="text" name="name" size="16"/>
            </li>

            <li>
                <!--
                Gender: Radio buttons for the user to select a gender of
                Male or Female. When the user clicks the text next to a
                radio button, that button should become checked. Initially
                Female is checked.
                -->
                <strong>Gender:</strong>
                <label><input type="radio" name="gender" value="M"/>Male</label>
                <label><input type="radio" name="gender" value="F"/>Female</label>

            </li>

            <li>
                <!--
                Age: A 6-letter-wide text input box for the user to type
                his/her age in years. The box should allow typing up to 2
                characters.
                -->
                <strong>Age:</strong>
                <input type="text" name="age" size="6" maxlength="2"/>
            </li>
