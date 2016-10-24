<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("login.php");
   }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<meta name="theme-color" content="#000000">
	<meta name="description" content="Hospital System">
	<meta name="keywords" content="Hospital Syste ">
	<link rel="STYLESHEET" type="text/css" href="css/pwdwidget.css" />

	<script type='text/javascript' src='js/gen_validatorv31.js'></script>
	<script src="js/pwdwidget.js" type="text/javascript"></script> 
	<title>Register</title>

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

	<!-- Registration Form -->
  			<h1>Patient Registeration</h1>
		
				<!-- Register-->
				<section id="RegSection" class="no-padding-bottom active">
					<div class="container">
						<div class="row">
							<div id='fg_membersite' class="col-sm-6 vertical-center padding-fix">
								<div> <span class='error' style="color:red"><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
								<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' data-toggle="validator" role="form" accept-charset='UTF-8'>
									<input type='hidden' name='submitted' id='submitted' value='1'/>

  									<div class="group">
    									<input id='name' class="form-control" type="text" name='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' length="30" maxlength="50" required><span class="highlight"></span>
    									<span id='register_name_errorloc' class='error'></span>
    									<label>First Name</label>
  									</div>
  									<div class="group">
   										<input id='lastname' type="text" name='lastname' class="form-control" value='<?php echo $fgmembersite->SafeDisplay('lastname') ?>' maxlength="30" required><span class="highlight"></span>
   										<span id='register_name_errorloc' class='error'></span>
    									<label>Last Name</label>
  									</div>
  								
  									<div class="group">
   										<input type="email" name='email' id='email' class="form-control" value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" required><span class="highlight"></span>
   										<span id='register_email_errorloc' class='error'></span>
    									<label>Email Address</label>
  									</div>
  									<div class="group">
   										<!-- <input type="password" name = "password" id = "password" class="form-control" required><span class="highlight" class="form-control"></span> -->
   										<div class='pwdwidgetdiv' id='thepwddiv' class="form-control" id="password"> </div> <span class="highlight"></span> 
   										<div id='register_password_errorloc' class='error' style='clear:both'></div>
    									<!-- <label>New Password</label> -->
  									</div>
  									<div class="group">
   										<input type="password" name = 'cpassword' id = 'cpassword' class="form-control" required><span class="highlight"></span>
   										<span class=""></span>
    									<label>Confirm Password</label>
  									</div>
  									
  									<div class = "group">
  										<select name='gender' id='gender' required >
                  							<option value="" disabled selected>Gender</option>
                  							<option class="yellow-text text-darken-2" name="male" id="male" value="Male">Male</option>
                  							<option class="yellow-text text-darken-2" name="female" id="female" value="Female">Female</option>
                  							<option class="yellow-text text-darken-2" name="tresgender" id="tresgender" value="Tresgender">Other</option>
                						</select>
                		</div>


                			<div class="group">
   										<input id='address' type="text" name='address' class="form-control" value='<?php echo $fgmembersite->SafeDisplay('address') ?>' maxlength="30" required><span class="highlight"></span>
   										<span id='register_name_errorloc' class='error'></span>
    									<label>Address</label>
  									</div>

                    <div class = "group">
                      <input type="date" name="birthday" id="birthday" required><span class="highlight"></span>
                      <label>Birthday</label> 
                          </div>
                					
                		<button type="submit" id='Submit' name='Submit' value='Submit' class="button buttonBlue">SUBMIT
    									<div class="ripples buttonRipples"><span class="ripplesCircle" ></span></div>
  									</button
  							
						 		</div> <!-- end .col-sm-7 --> 
						 	</form>

						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->


<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>


	
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