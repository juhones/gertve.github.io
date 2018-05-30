<!DOCTYPE html>
<html lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gert en Carna | 25 Augustus 2018 </title>

	<link rel="icon" href="favicon.png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full.css" rel="stylesheet">

    <!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="rsvp">

	<div class="container" style="margin-top: 8%; padding-bottom: 4%;">
    	<div class="row text-center">
        	
            <div class="col-md-7 col-xs-12 text-left">
				<h1 style="border: 1px solid #fff;padding: 15px 30px; display: inline; margin-left: -30px;">RSVP</h1>
				<h4 style="padding-top: 35px !important;">Laat weet ons asseblief voor of op 30 Junie 2018 of jy ons troue gaan bywoon.</h4><br>
           		<p>Vul asb alle besonderhede op die aanlyn vorm in:</p><br/>
             <?php
            	 // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-warning\">".$_GET['e']."</div>";  
  
?> 
            <form id="contact-form" name="contact-form" method="post" action="contact-form-submission.php" onSubmit="return validation();">
           	  <div class="form-group">
                <label for="name">Naam en van*</label>
                <input type="text" class="form-control req-string" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Jou epos*</label>
                <input type="email" class="form-control req-email" id="email" name="email" required>
              </div>
              <div class="form-group">
              <label for="rsvp">RSVP vir troue* </label><br/><br/>
              <ul>             
                  <li>
                    <input type="radio" id="s-option"  name="rsvp" value="Ons woon graag julle troue by">
                    <label for="s-option">Ons woon graag julle troue by</label>
                    
                    <div class="check"><div class="inside"></div></div>
                  </li>
                  
                  <li>
                    <input type="radio" id="t-option"  name="rsvp" value="Ongelukkig kan ons nie julle troue bywoon nie">
                    <label for="t-option">Ongelukkig kan ons nie julle troue bywoon nie</label>
                    
                    <div class="check"><div class="inside"></div></div>
                  </li>
                </ul>
              
              </div>
              <p>&nbsp;</p>
              <div class="form-group">
              <label for="message">Name van gaste wat bywoon soos per die uitnodiging</label>
              <textarea class="form-control" id="gaste" name="gaste"></textarea>
              </div>
              <input type="hidden" name="save" value="contact">
              <button type="submit" class="btn btn-rsvp">RSVP</button>
              
        </form>	
				<h2 class="terug"><a href="index.html">TERUG</a></h2>
            </div>
			<div class="col-md-1 col-xs-12">
				&nbsp;
			</div>
			<div class="col-md-3 col-xs-12 text-right">
             <nav class="nav-links2">
             	<ul>
             		<li><a href="index.html">Tuis</a></li>
             		<li><a href="die-troue.html">Die troue</a></li>
             		<li><a href="verblyf.html">Verblyf opsies</a></li>
             		<li><a href="geskenke.html">Geskenkidee</a></li>
             		<li><a href="rsvp.php">RSVP</a></li>
             	</ul>
             </nav>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	 
</body>

</html>
