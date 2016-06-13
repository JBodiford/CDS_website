<?php
//add the recipient's address here
$myemail = 'chsDerbySyndicate@gmail.com';
 
//grab named inputs from html then post to #thanks
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$experience = strip_tags($_POST['experience']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
echo "<strong>Name:</strong> ".$name."<br>";   
echo "<strong>Email:</strong> ".$email."<br>"; 
echo "<strong>Experience: </strong> ".$experience. "<br>";
echo "<strong>Message:</strong> ".$message."<br>";
 
//generate email and send!
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email\n Experience: $experience \n Message: \n $message" ;
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}
?>