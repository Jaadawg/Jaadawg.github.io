<?php
//it's time for php, get ready.



//these three variables store whatever text information the user entered in the respective text inputs.
//for example, the $message variable will store the input with the name attribute of "message"
//<input type="text" name="message" id="message">
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];


	$email_from = "jaydenlatchuk@gmail.com";//replace this with your portfolio email. something like info@josiegrace.ca
	$email_subject = "Portfolio Contact Get!";//this is what will appear in the subject line of the email you recieve.
	$email_body = "Name: $name \n\nMessage: $message \n\nReply to: $visitor_email \n\nPhone: $phone";//this is what will appear in the body of the email you recieve. the \n characters create new lines, i just placed them for readability. unlike javascript, the variables don't have to be concatenated.

	$to = "jaydenlatchuk@gmail.com";//you can replace this with the email address where you want to recieve the message.
	mail($to,$email_subject,$email_body);//the mail() function takes three arguments: mail(email, subject-line, message). You can also add a fourth argument for headers like CC: but I wouldn't worry about it, it just fucks shit up.

//the rest of the code is a fail safe to protect you against spam. it basically checks the message for characters that a normal person wouldn't write. I would just copy and paste it.
function isInjected($str) {
	$injections = array('(\n+)',
		'(\r+)',
		'(\t+)',
		'(%0A+)',
		'(%0D+)',
		'(%08+)',
		'(%09+)'
		);
	$inject = join('|', $injections);
	$inject = "/$inject/i";

	if(preg_match($inject,$str))
	{
		return true;
	} else {
		return false;
	}
}
if(isInjected($visitor_email)) {
	echo "Swiper no swiping!!1!";
	exit;
}
//the name of this file will be what you write in the action attribute of your form. when the user clicks submit, it will take them to this page. On mine I just wrote a simple html page after the closing php tag that thanks them for their email and provides a link to return to the main page. I tried to use JavaScript to keep them on, but even dudley says it's futile.

//also note that this page has to be live. testing locally will not work. hope i helped.
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Jayden Latchuk | Thank You!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="styles.css">
		<link rel="stylesheet"  href="projectstyles.css">
		<link rel="shortcut icon" href="favicon.png">
	</head>
	<body>

		<?php include_once("assets/includes/analyticstracking.php") ?>

		<?php include("assets/includes/navigation.html"); ?>

		<div class="content">

			<header id="intro" class="contact-me bgImage">

				<section>
					<div class="introText">
						<h1>Thank You!</h1>
						<h4 style="color: #fff; font-weight: 400;">Thanks <?php echo $name; ?>, I received your message and will get back to you ASAP!</h4>
					</div>
				</section>
			</header>

		</div>

		<?php include("assets/includes/footer.html"); ?>

	</body>
</html>
