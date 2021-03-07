<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-2.css" >
    <title>Document</title>
</head>
<body>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					
					<input id="user" type="text" class="input" placeholder="Full Name ...">
				</div>
                <div class="group">
					
					<input id="user" type="text" class="input" placeholder="Username ...">
				</div>
                <div class="group">
					
					<input id="pass" type="text" class="input" placeholder="Email Address ...">
	                </div>
				<div class="group">
					
					<input id="pass" type="password" class="input" data-type="password" placeholder="Password ...">
				</div>
				<div class="group">
					
					<input id="pass" type="password" class="input" data-type="password" placeholder="Repeat Password ...">               
                </div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already A Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>