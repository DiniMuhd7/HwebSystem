<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submit']))
{
    $fgmembersite->RedirectToURL("login.php");
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
	<title>Welcome to eHospital</title>

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
		<a class = "head-title" href="./index.php"><strong>eHospital</strong></a>
	</header>

	<header class ="header-n">
		<div class="bottom clearfix">
		<div class="title"><a href="">eHospital</a></div>
		<nav class="main-nav">
					<ul class="list-unstyled">
						<li class="active"><a href="./index.php">HOME</a></li>
						<li><a href="#section2">ABOUT</a></li>
						<li><a href="./admin_login.php">ADMIN</a></li>
						<li><a href="./employee_login.php">EMPLOYEE</a></li>
						<li><a href="#section5">CONTACT</a></li>
					</ul>
		</nav> <!-- end .main-nav -->
		</div>

	</header>

	<style>
		table, th, td {
    	border: 2px solid black;
    	border-collapse: collapse;
    	margin-left: : 20px;
		}
		th, td {
    	padding: 5px;
    	text-align: center;
		}
	</style>

	<hgroup>
  		<h1>Welcome to eHospital</h1>
	</hgroup>


	<!-- Form Code Start -->
	<div id='fg_membersite'>
	<form id='form1' name="form1" method='post' accept-charset='UTF-8' action=''>
	
  		<button type='submit' name='submit' id='submit' action='./login.php' class="button buttonBlue">GET STARTED
    	<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  		</button>
	</form>

	<!-- Sections -->
		<div class="sections">
			<div class="sections-wrap">
				<!-- Home -->
				<section id="section1" class="no-padding-bottom active">
					<div class="container">
						<div class="aser">
							<div class="comlumn">
								<h1>Smart eHospital System</sup></h1>
								<p>Yei, I’fnm Yofd Uindl. P Hlska byekd Ykladke ipo j hklskdf poefd pildskf phked ksldsk peod dylsd. Tk add <a class="open" target="_blank" href="https://en.wikipedia.org/wiki/Open_source"> Trkkdglid </a>Pklslkdrdy, i couojlklsrlie et ar peod peoode ir poieldre eidt adlgieec filf eeig eof sopld.</p>
							</div> <!-- end .col-sm-7 -->
							
							<div class="col-sm-5 vertical-center">
								<!--<img src="images/Regbanner.png" alt="man" class="img-responsive section-img">-->
								<!--<img src="images/DeenIndex.png" alt="man" class="img-responsive section-img">-->
							</div> <!-- end .col-sm-5 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

			</div>
		</div>


			<!-- Sections -->
		<div class="sections">
			<div class="sections-wrap">
				<!-- Home -->
				<section id="section2" class="no-padding-bottom active">
					<div class="container">
						<div class="aser">
							<div class="comlumn">
								<h1>About eHospital</sup></h1>
								<p>Yei, I’fnm Yofd Uindl. P Hlska byekd Ykladke ipo j hklskdf poefd pildskf phked ksldsk peod dylsd. Tk add <a class="open" target="_blank" href=""> Trkkdglid </a>Pklslkdrdy, i couojlklsrlie et ar peod peoode ir poieldre eidt adlgieec filf eeig eof sopld.</p>
							</div> <!-- end .col-sm-7 -->
							
							<div class="col-sm-5 vertical-center">
								<!--<img src="images/Regbanner.png" alt="man" class="img-responsive section-img">-->
								<!--<img src="images/DeenIndex.png" alt="man" class="img-responsive section-img">-->
							</div> <!-- end .col-sm-5 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

			</div>
		</div>



		<!-- Contact -->
				<section id="section5">
					<div class="container">
						<h1>Contact Us</h1>
						<div class="row">
							<div class="col-sm-5">
								<ul class="list-icons list-unstyled">
									<li><i class="ion-ios-location-outline"></i>Downtown 47810 Petaling Jaya,<br />Kuala Lumpur Malaysia.</li>
									<li><i class="ion-iphone"></i>Phone: +60 000-000-0000</li>
									<li><i class="ion-ios-email-outline"></i>Email: <a href="mailto:contact@ehospital.com">contact@ehospital.com</a></li>
									<li><i class="ion-ios-home-outline"></i>Website: <a href="">http://www.ehospital.com</a></li>
								</ul>
								<div class="spacer"></div>
								<div class="social-icons">
									<a href="" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a>
									<a href="" target="_blank" class="social-icon"><i class="fa fa-twitter"></i></a>
									<a href="" target="_blank" class="social-icon"><i class="fa fa-google-plus"></i></a>
									<a href="#" class="social-icon"><i class="fa fa-dribbble"></i></a>
								</div> <!-- end .social-icons -->
								<div class="spacer"></div>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script>
    function submitForm(action)
    {
        document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }
</script>


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