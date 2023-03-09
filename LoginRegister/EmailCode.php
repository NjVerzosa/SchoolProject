<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="Form.css">
</head>
<body>
     <form action="forgot_password_process.php" method="post">
     	<h2>Send Email</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email Address</label>
     	<input type="text" name="email" placeholder="Email Address" required>
		<br>
     	<button type="reset">Send</button>
		  <br>
		  <a href="index.php" class="ca">Login Here</a>
		</form>
</body>
</html>