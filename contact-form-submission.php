<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: rsvp.php"); exit;
}
	
// get the posted data
$name = $_POST["name"];
$email = $_POST["email"];
$rsvp = $_POST["rsvp"];
$gaste = $_POST["gaste"];
	
// check that a name was entered
if (empty ($name))
    $error = "Please enter your name.";
	
	
// check that an email address was entered
elseif (empty ($email)) 
    $error = "Enter email address.";
	
	
// check for a valid email address
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))
    $error = "Enter a valid email address.";
	
	
// check for a options
elseif (empty ($rsvp)) 
    $error = "RSVP asseblief";

		
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header("Location: rsvp.php?e=".urlencode($error)); exit;
}

$msg = $name . "\n" . $email . "\n" . $rsvp . "\nGaste:" . $gaste . "\n";
//will open a file
$fp = fopen("list.txt","a") or die("Can't open file");
//will write to a file
fwrite($fp, $msg."\n");
fclose($fp);
		
// write the email content
$email_content = "Naam en van: $name\n\n";
$email_content .= "Epos: $email\n\n";
$email_content .= "RSVP:\n$rsvp\n\n";
$email_content .= "Gaste:\n$gaste";

	$headers = "From: $email"; 
	$headers .= "\n";
	$headers .= "Reply-To: $email";
	
// send the email
mail ("carnacombrinck@gmail.com", "Carna en Gert RSVP", $email_content,$headers);
	
// send the user back to the form
header("Location: rsvp.php?s=".urlencode("Jou RSVP is gestuur, dankie!")); exit;

?>
