<?php include ("login.php"); ?>

<!-- HTML FORMS -->

<h2><br />Sign Up Form</h2>

<form method="post">
	
	<br />
	
	<label for="email">Email:</label>
	<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']) ?>" placeholder="Email Address" />
	
	<label for="password">Password:</label>
	<input type="password" name="password" value="<?php echo addslashes($_POST['password']) ?>" placeholder="Password"/>	
	
	<input type="submit" name="submit" value="Sign Up" />
	
</form>

<h2><br />Log In Form</h2>

<form method="post">
	
	<br />
	
	<label for="email">Email:</label>
	<input type="email" name="loginEmail" id="loginEmail" value="<?php echo addslashes($_POST['loginEmail']) ?>" placeholder="Email Address" />
	
	<label for="password">Password:</label>
	<input type="password" name="loginPassword" value="<?php echo addslashes($_POST['loginPassword']) ?>" placeholder="Password"/>	
	
	<input type="submit" name="submit" value="Log In" />
	
</form>

<form method="post">
	
	<br />
	
	<input type="submit" name="submit" value="Clear Session" />
	
</form>
