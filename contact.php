<?php 
//Message Vars
$msg = ''; 
$msgClass = '';
////check for submit
if(filter_has_var(INPUT_POST, 'submit')){
	    // Get form data
    $name       = htmlspecialchars($_POST['name']); 
    $email      = htmlspecialchars($_POST['email']); 
    $inputsubject= htmlspecialchars($_POST['subject']); 
    $message    = htmlspecialchars($_POST['message']); 
    
    $toEmail = 'asma.royan@yahoo.com';
    $subject = 'Contact Request Form: ' . $name; 
    $body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Subject</h4><p>'.$inputsubject.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';
    
    //Email header
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .="Content-Type: text/html; charset=utf-8" . "\r\n";
    $headers .= "From: " .$name ." <". $email . "> ". "\r\n";
    
    if(mail($toEmail, $subject, $body, $headers)){
        $msg = ' Your message has been received. Thank you. ';
        $msgClass = 'alert-success'; 
    }else{
        $msg = 'Sorry, Message has NOT been received.'; 
        $msgClass = 'alert-danger'; 
    }

}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="CSS/superslides.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="CSS/owl.carousel.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/style.css">

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h3 class="section-subheading "></h3>
			</div>
		</div>

		<?php if($msg != ''): ?>
		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif; ?>

		<div class="row">
			<div class="col-lg-12">

				<form name="sentMessage" id="contactForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

					<div class="row">
						<div class="col-md-6">
							<div><img src="img/AsmaLogo.PNG" class="img-fluid aboutimage"></div>
						</div>
						<div class="col-md-6">
							<h2 class="section-title">Contact Us</h2>
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="tel" name="subject" class="form-control" placeholder="Subject" id="subject">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
							<div></div>
							<button class="contactButton" name="submit">Send Message</button>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
