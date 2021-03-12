<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles-2.css">
	<title>Document</title>
</head>

<body>

	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<form action="includes/login.inc.php" method="POST">
						<div class="group">
							
							<input id="user" type="text" class="input" placeholder="Username / Email">
						</div>
						<div class="group">
							
							<input id="pass" type="password" class="input" data-type="password" placeholder="Password">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Log In">
						</div> 
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
					</form>
				</div>
				<div class="sign-up-htm">

					<form action="includes/signup.inc.php" method="POST">
						<div class="group">
							<input id="user" type="text" name="name" class="input" placeholder="Full Name ...">
						</div>
						<div class="group">

							<input id="user" type="text" name="uid" class="input" placeholder="Username ...">
						</div>
						<div class="group">

							<input id="pass" type="text" name="email" class="input" placeholder="Email Address ...">
						</div>
						<div class="group">

							<input id="pass" type="password" name="pwd" class="input" data-type="password" placeholder="Password ...">
						</div>
						<div class="group">

							<input id="pass" type="password" name="pwdrepeat" class="input" data-type="password" placeholder="Repeat Password ...">
						</div>

						<div class="group">
							<input type="submit" class="button" name="submit" value="Sign Up">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Already A Member?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>