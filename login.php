<?php
require_once "config.php";

if (isset($_SESSION['access_token'])) {
	header("Location: index.php");
	exit();
}

$redirectURL = "https://localhost/FacebookLogin/fb-callback.php";

$permissions = ['email'];

$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

// echo $loginURL;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>
	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="Images/logo.jpg"><br><br>
				<form>
					<input type="email" name="email" placeholder="Email" class="form-control"><br>
					<input type="password" name="password" placeholder="Password" class="form-control"><br>
					<input type="submit" name="submit" value="Log In" class="btn btn-primary">
					<input type="button" onclick="window.location='<?php echo $loginURL; ?>';" name="submit" value="Log In With Facebook" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</body>
</html>