<!--
Tariq Cranston

Description:
Read the data as POST from the query parameters and store it in singles.txt

Features:
Header logo and text thanking the user
-->

<?php include("top.html"); ?>
<?php include("extra.php"); ?>

<?php
/* Set default values for all variables the page needs. */
$errors = array();
$userInfo = array(
    'name' => '',
    'gender' => '',
    'age' => '',
    'type' => '',
    'OS' => '',
    'min' => '',
    'max' => ''
);
		/* Confirm that values are present before accessing them. */
		if(isset($_POST['name'])) {
			$userInfo['name'] = urlencode($_POST['name']);
		}
		if(isset($_POST['gender'])) {
			$userInfo['gender'] = urlencode($_POST['gender']);
		}
		if(isset($_POST['age'])) {
			$userInfo['age'] = urlencode($_POST['age']);
		}
		if(isset($_POST['type'])) {
			$userInfo['type'] = ($_POST['type']);
		}
		if(isset($_POST['os'])) {
			$userInfo['favorite_os'] = ($_POST['os']);
		}
		if(isset($_POST['min_seeking_age'])){
			$userInfo['min_seeking_age'] = ($_POST['min_seeking_age']);
		}
		if(isset($_POST['max_seeking_age'])){
			$userInfo['max_seeking_age'] = ($_POST['max_seeking_age']);
		}
		/* check: names cannot be digits */
		if (preg_match("/[0-9]/", $_POST["name"]) === 1) {
		
			$errors[] = "Name cannot be digits";
			$errors[] = "Go back and fix it yah nerd...";
		}
		/* alphabetic letters with the first letter of each world capitalized. */
		$words = explode(" ", $userInfo["name"]);
		for ($i = 0; $i < count($words); $i++) {
			if(strcmp(ucfirst($words[$i]),$words[$i]) !== 0) {
			
				$errors[] = "Name must be capitalized";
				$errors[] = "Go back and fix it yah nerd...";
				break;
			}
		}
		//validate name
		if (empty($userInfo["name"])) {
		
			$errors[] = "No name was entered. Please enter a name.";
			$errors[] = "Go back and fix it yah nerd...";
		}
		//validate gender
		if (empty($userInfo["gender"])) {
		
			$errors[] = "No gender was entered. Please state what you identify as.";
			$errors[] = "Go back and fix it yah nerd...";
		}
		//validate age
		if (!is_numeric($userInfo["age"])) {
		
			$errors[] = "Age is not a number.";
			$errors[] = "Go back and fix it yah nerd...";
		}

<div>
    <h1>Thank you!</h1>
    <p>
        Welcome to NerdLuv, <?= $_POST["name"] ?>!<br/><br/>
        Now <a href="matches.php">Log in to see your matches!</a>
    </p>
</div>

<?php writeToFile(); ?>

<?php include("bottom.html"); ?>

<!-- PHP FUNCTIONS START-->
<?php
/**
 * User data is stored in a file singles.txt.
 * The file contains data records as lines in exactly the following format:
 * user's name, gender (M or F), age, personality type, operating system, and min/max seeking age, separated by comma.
 * Example: Angry Video Game Nerd,M,29,ISTJ,Mac OS X,1,99
 */
function writeToFile()
{
    //$_GET and $_POST are superglobals. They do not need to be passed as a function parameter.

    $userInfo = "";
    foreach ($_POST as $attribute) {
        $userInfo = $userInfo . $attribute . ",";
    }
    //substr($userInfo, 0, -1) removes the comma (,) at the end of the string
    file_put_contents("singles.txt", "\n" . substr($userInfo, 0, -1), FILE_APPEND);
}

?>
<!-- PHP FUNCTIONS END-->
