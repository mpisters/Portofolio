<?php

$emailFrom = "pistersmichelle@gmail.com";
$emailTo = "pistersmichelle@gmail.com";
$subject = "Contact Form Submission";

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $phone = $message = "";
function validate_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"]){
		$nameErr = "Name is required";
	} 
	$name = validate_data($_POST["name"]);
	if(empty($_POST["email"]){
		$emailErr = "Email is required";
	} 
	$email = validate_data($_POST["email"]);
	$message = validate_data($_POST["message"]);
	$phone = validate_data($_POST["phone"]);
}

$body .= "Name: ";
$body .= $name;
$body .= "\n";
 
$body .= "Email: ";
$body .= $email;
$body .= "\n";
 
$body .= "Message: ";
$body .= $message;
$body .= "\n";


if($name != "" && $email != "" && $message != ""){
	mail($emailTo, $subject, $body, "From: <$email>");
} else {
	echo "<alert>No success</alert>";
}
?>