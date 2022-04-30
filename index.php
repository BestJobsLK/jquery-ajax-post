<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Subscription</title>
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="container">
			<div class="subscribe">
				<!-- following is the subscription form visible by default -->
				<div class="form">
					<form id="subform" autocomplete="off">
						<h2>Subscribe To Mailing List</h2>
						<img src="img/envelope.png" alt="Subscribe" class="envelope">

						<p class="error hidden">Something Went Wrong. Please Try Again</p>

						<input type="text" name="full_name" id="full_name" max-length="50" placeholder="Your Name" required autofocus>
						<input type="email" name="email" id="email" max-length="100" placeholder="Email Address" required>
						<button type="submit" name="submit" id="submit">Subscribe</button>
					</form>
				</div> <!-- .form -->

				<!-- this is shown while submit is ongoing -->
				<div class="progress hidden">
					<h2>Subscribing...</h2>
					<img src="img/ajax-loader.gif">
				</div> <!-- .progress -->
			
				<!-- this is shown on successful submission	 -->
				<div class="success hidden">
					<h2>Successfully Subscribed</h2>
					<img src="img/success.png" alt="">
					<h2>Thank You!</h2>
				</div> <!-- .success -->
			</div> <!-- .subscribe -->  
		</div> <!-- .container -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>