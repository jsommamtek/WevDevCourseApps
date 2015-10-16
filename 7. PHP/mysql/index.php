<?php include ("login.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary PHP/MySQL Project</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

      .navbar-brand {
        font-size: 1.7em;
      }

      .topContainer {
        background-image: url("images/background.jpg");
        width: 100%;
        background-size: cover;
      }

      #topRow {
        margin-top: 100px;
        text-align: center;
      }

      #topRow h1 {
        font-size: 300%;
      }

      .bold {
        font-weight: bold;
      }

      .marginTop {
        margin-top: 30px;
      }

      .center {
        text-align: center;
      }

      .title {
          margin-top: 100px;
          font-size: 300%;
      }

      .footer {
        background-color: #B0D1FB;
        padding-top: 70px;
        width: 100%;
      }

      .marginBottom {
        margin-bottom: 30px;
      }

      .appStoreImage {
        width: 250px; 
      }

    </style>
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

          <a class="navbar-brand">Secret Diary</a>

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

          <h1 class="marginTop">Secret Diary</h1>

          <p class="lead">Your own private diary, with you wherever you go.</p>

          <p class="bold marginTop">Interested? Sign Up Below!</p>
          
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
          

        </div>

      </div>

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>

      $(".contentContainer").css("min-height", $(window).height());

      // Get error status from PHP var on login.php
      var error = "<?php echo addslashes($error); ?>"
      var success = "<?php echo addslashes($success); ?>"
      
      //alert (success);
      
      // Disply an error if one was generated by login.php
      if (error != "") {
					$("#message").addClass("alert alert-warning");
					$("#message").html("<strong>Warning!</strong><br />" + error);	
        
      // Check for success message from login.php
      } else if (success != "") {
					$("#message").addClass("alert alert-success");
					$("#message").html("<strong>Success!</strong><br />" + success);

      // Clear and hide any alert div status for a fresh start
      } else {
				$("#message").removeClass("alert alert-success alert-warning alert-danger");

      }
      
      // Check debug status from login.php and display if turned on
      var debugStatus = "<?php echo addslashes($debugOn); ?>";
      var debug = "<?php echo addslashes($debug); ?>";
      
      if (debugStatus) {
        	$("#debug").addClass("alert alert-info");
					$("#debug").html("<strong>Debug Information</strong><br />" + debug);
          
      } else {
        	$("#debug").removeClass("alert alert-success alert-warning alert-danger");
        
      }

    </script>
  </body>
</html>