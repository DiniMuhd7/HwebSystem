<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("patient_home.php");
   }
}

?>

<!DOCTYPE html>
<html lang="en">	
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<meta name="theme-color" content="#2962FF">
	<meta name="description" content="Hospital System">
	<meta name="keywords" content="eHospital System">
	<title>Login</title>

	<!-- CSS Bootstrap -->
	<link href="css/base.css" rel="stylesheet">
	<!-- Material Design Icons -->
	<link href="add-script/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<!-- Font Awesome -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Iconicons -->
	<link href="add-script/fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="add-script/css/owl.carousel.css" rel="stylesheet">
	<link href="add-script/css/owl.theme.default.css" rel="stylesheet">
	<!-- Style.css -->
	<link href="add-script/css/style.css" rel="stylesheet">


	<link href="css/styler.css" rel="stylesheet">


</head>
	
<body>

	<header class="header">
		<a class = "head-title" href="./index.php"><strong>eHospital System</strong></a>
		     
	</header>


	<hgroup>
  		<h1>Patient Login</h1>
	</hgroup>
	
	<!-- Form Code Start -->
	<div id='fg_membersite'>
	<form id='login' value='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
  		<div class="group">
    		<input type='email' id='email' name='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' class="form-control" maxlength="50" ><span class="highlight"></span>
    		<span class="bar"></span>
    		<label>Email</label>
  		</div>
  		<div class="group">
   			<input type='password' id='password' name='password' maxlength="50" class="form-control"><span class="highlight"></span>
   			<span class="bar"></span>
    		<label>Password</label>
  		</div>
  		<button type='submit' name='Submit' value='Submit' class="button buttonBlue">Login
    	<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  		</button>
  		<div><span class='error' style="color:red"><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>

  		<a class="reg-link"  style="color:black" href="./register.php">NEW PATIENT</a>
	</form>
	

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("email","req","Please provide your email address");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

	
	
	<!-- Base Javascript -->
	<script src="js/base.js" type="text/javascript"></script>
	

    <!-- jQuery -->
	<script src="add-script/js/jquery-1.11.2.min.js" type="text/javascript"></script>
	<!-- Inview -->
	<script src="add-script/js/jquery.inview.min.js" type="text/javascript"></script>
	<!-- SmoothScroll -->
	<script src="add-script/js/smoothscroll.js" type="text/javascript"></script>
	<!-- jQuery Knob -->
	<script src="add-script/js/jquery.knob.min.js" type="text/javascript"></script>
	<!-- Owl Carousel -->
	<script src="add-script/js/owl.carousel.min.js" type="text/javascript"></script>
	<!-- Isotope -->
	<script src="add-script/js/isotope.pkgd.min.js" type="text/javascript"></script>
	<!-- Images Loaded -->
	<script src="add-script/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
	<!-- google maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<!-- Scripts.js -->
	<script src="add-script/js/scripts.js"></script>

	<script src="add-script/js/bootstrap.js"></script>



	</body>
</html>