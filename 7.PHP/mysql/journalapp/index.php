<?php include ("php/login.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Journal App</title>

    <!-- BOOTSTRAP CSS REF -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <!-- BOOTSTRAP OPTIONAL THEME -->
	  <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

    <!-- INDEX CSS REF -->
    <link href="assets/css/index.css" rel="stylesheet" type="text/css" />
  </head>

  <body data-spy="scroll" data-target=".navbar-collapse">

    <div class="navbar navbar-default navbar-fixed-top">

      <div class="container">

        <div class="navbar-header">

          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand">My Journal</a>

        </div>

        <div class="collapse navbar-collapse">

          
          <!-- LOG-IN FORM -->
          <form method="post" class="navbar-form navbar-right">

            <div class="form-group">
              <input type="email" class="form-control" name="loginEmail" id="loginEmail" value="<?php echo addslashes($_POST['loginEmail']) ?>" placeholder="Email Address" />
            </div>
            
            <div class="form-group">
              <input type="password" class="form-control" name="loginPassword" value="<?php echo addslashes($_POST['loginPassword']) ?>" placeholder="Password"/>	
            </div>
            
            <div class="form-group">	
              <input type="submit" class="btn btn-success" name="submit" value="Log In" />
            </div>
  
          </form>

        </div>

      </div>

    </div>

    <div class="container contentContainer topContainer" id="home">

      <div class="row">

        <div class="col-md-6 col-md-offset-3" id="topRow">
          <h1 class="marginTop">My Journal</h1>
          <p class="lead">Your own private journal, with you wherever you go.</p>
          <p class="bold marginTop">Interested? Please Sign Up Below!</p>
          
          <!-- Message div for UI status -->
          <div id="message"></div>
          
          <!-- Debug div for UI messages -->
          <div id="debug"></div>
          
          <!-- SIGN-UP FORM -->
          <form method="post" class="marginTop">
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" value="<?php echo addslashes($_POST['email']) ?>" placeholder="Email Address" />
            </div>
                    
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" value="<?php echo addslashes($_POST['password']) ?>" placeholder="Password" />	
            </div>
            
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-lg marginTop" name="submit" value="Sign Up" />
            </div>
            
          </form>
          
        </div> <!-- end .col-* -->
        
      </div> <!-- end .row -->
      
    </div> <!-- end .container -->

    <!-- SCRIPTS SECTION AND LIBRARY REF -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- Custom app specific javascript library -->
    <script src="assets/js/index.js"></script>

  </body>
</html>