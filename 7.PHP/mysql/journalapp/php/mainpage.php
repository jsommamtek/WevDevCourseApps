<?php include("getJournal.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Journal Home</title>

    <!-- BOOTSTRAP CSS REF -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <!-- BOOTSTRAP OPTIONAL THEME -->
	  <!-- link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

    <!-- MAINPAGE CSS REF -->
    <link href="../assets/css/app.css" rel="stylesheet" type="text/css" />

  </head>

  <body data-spy="scroll" data-target=".navbar-collapse">

    <!-- NAV BAR -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">

        <!-- BRAND -->
        <div class="navbar-header pull-left">
          <a class="navbar-brand">My Journal</a>
        </div>

        <!-- LOG OUT LINK -->
        <div>
          <ul class="navbar-nav nav pull-right">
            <li><a href="../index.php?logout=1">Log Out</a></li>
          </ul>
        </div>
        
      </div> <!-- end .container -->
    </div> <!-- end nav bar -->

    <!-- JOURNAL HEADER AND TEXT -->
    <div class="container contentContainer topContainer" id="home">

      <div class="row">
        <div class="col-md-6 col-md-offset-3 top-row">
          
          <!-- DEBUG DIV FOR UI MESSAGES -->
          <div id="debug"></div>
          
          <h1 class="marginTop marginBottom">Journal Entry</h1>
          <textarea class="form-control mt-journal-entry"><?php echo $diary; ?></textarea>
        </div>
      </div>
      
    </div> <!-- end .container -->

    <!-- SCRIPTS SECTION AND LIBRARY REF -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- Custom app specific javascript library -->
    <script src="../assets/js/mainPage.js"></script>

    <script>
                  
      // Check debug status from getJournal.php and display if turned on
      var debugStatus = "<?php echo addslashes($debugOn); ?>";
      var debug = "<?php echo addslashes($debug); ?>";
      
      if (debugStatus) {        
        //alert ("debugStatus ON");
        $("#debug").addClass("alert alert-info");
        $("#debug").html("<strong>Debug Information</strong><br />" + debug);
      } else {
        $("#debug").removeClass("alert alert-success alert-warning alert-danger");
      }

    </script>

  </body>
</html>