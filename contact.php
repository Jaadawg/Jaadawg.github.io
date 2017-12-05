<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Jayden Latchuk | Contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="styles.css">
		<link rel="stylesheet"  href="projectstyles.css">
		<link rel="shortcut icon" href="favicon.png">
	</head>
	<body>

		<?php include_once("assets/includes/analyticstracking.php") ?>

		<?php include("assets/includes/navigation.html"); ?>

		<div class="content">

			<header id="intro" class="heroImage bgImage">

				<section>
					<div class="introText">
						<h1>Contact Me</h1>
					</div>
				</section>
			</header>


			<section id="contact">

				<div class="contactForm">
					<div id="contactInfo">
						<h3>Lets Talk.</h3>
						<p>
							I am always looking for new projects that I can lend my skills to. I love a good challenge... so let's hear what you have! You can email me at <a href="mailto:jaydenlatchuk@gmail.com" title="Direct mail" class="textLink">  jaydenlatchuk@gmail.com</a> or feel free to fill out the form below and I will get back to you ASAP!
						</p>
					</div>

					<form method="post" action="formhandler.php">

						<div class="formItems">
							<input type="text" name="name" id="name" required>
							<label for="name">Name</label>
						</div>

						<div class="formItems">
							<input type="email" name="email" id="email" required>
							<label for="email">Email</label>
						</div>

						<div class="formItems">
							<input type="tel" id="phone" name="phone">
							<label for="phone">Phone</label>
						</div>

						<div class="formItems">
							<textarea name="message" id="message" required></textarea>
							<label for="message">Message</label>
						</div>

						<div class="formItems">
							<input type="submit" value="Submit" class="submitButton">
						</div>

					</form>
				</div>
			</section>

		</div>

		<?php include("assets/includes/footer.html"); ?>

	</body>
</html>
