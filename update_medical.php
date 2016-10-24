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
	<title>Update MedicalResult</title>

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
  			<h1>Update MedicalResult</h1>
		
				<!-- Register-->
				<section id="RegSection" class="no-padding-bottom active">
					<div class="container">
						<div class="row">
							<div id='fg_membersite' class="col-sm-6 vertical-center padding-fix">
								<form id='form1' name='form1' action='' method='post' data-toggle="validator" role="form" accept-charset='UTF-8'>
									<input type='hidden' name='submitted' id='submitted' value='1'/>
                    <div class="group">
                      <input id='result_id' class="form-control" type="text" name='result_id' value='' length="30" maxlength="50"><span class="highlight"></span> 
                      <label>Result ID</label>
                    </div>
  									<div class="group">
    									<input id='result_title' class="form-control" type="text" name='result_title' value='' length="30" maxlength="50"><span class="highlight"></span>
    									<label>Result Title</label>
  									</div>
  									<div class="group">
   										<input id='result_date' type="date" name='result_date' class="form-control" value='' maxlength="30"><span class="highlight"></span>
    									<label>Result Date</label>
  									</div>

                     <div class="group">
                      <input id='patient_id' class="form-control" type="text" name='patient_id' value='' length="30" maxlength="50"><span class="highlight"></span>
                      <label>Patient ID</label>
                    </div>

                     <div class="group">
                      <input id='employee_id' class="form-control" type="text" name='employee_id' value='' length="30" maxlength="50"><span class="highlight"></span>
                      <label>Employee ID</label>
                    </div>

                    <div class="group">
                      <input id='prescription_id' class="form-control" type="text" name='prescription_id' value='' length="30" maxlength="50"><span class="highlight"></span>
                      <label>Prescription ID</label>
                    </div>

                    <button type="submit" id='add' name='add' value='add' class="button buttonBlue">ADD
                      <div class="ripples buttonRipples"><span class="ripplesCircle" ></span></div>
                    </button>
                					
                		<button type="submit" id='update' name='update' value='update' class="button buttonBlue">UPDATE
    									<div class="ripples buttonRipples"><span class="ripplesCircle" ></span></div>
  									</button>

                    <button type="submit" id='delete' name='delete' value='delete' class="button buttonBlue">DELETE
                      <div class="ripples buttonRipples"><span class="ripplesCircle" ></span></div>
                    </button>
  							     
                     <a class = 'head-title' type='submit' href='./lab_scientist_home.php' name='edit' id='edit' class="">BACK TO HOME</a>

						 		</div> <!-- end .col-sm-7 --> 
						 	</form>

						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

<?php
// Make sure you edit php.ini file which you can find it inside your webserver php folder.
// Open the php.ini file and enable soap client to avoid having errors.
//$client = new SoapClient("patient_home.wsdl");

if(isset($_POST['add']))
{ 
  $resultId = $_POST['result_id'];
  $resultTitle = $_POST['result_title'];
  $resultDate = $_POST['result_date'];
  $patientId = $_POST['patient_id'];
  $employeeId = $_POST['employee_id'];
  $prescriptId = $_POST['prescription_id'];


  $database = mysqli_connect("127.0.0.1", "root", "1234567890") or die("Could not open database");
    mysqli_select_db($database, "ehospital") or die("Could not select database");

  if($resultId ==""||$resultId==null)
  {
    echo "Result Not Found. Please Try Again.";
    return false;
  }

  $mQuery = "SELECT * FROM `medical_result`";
  $result = mysqli_query($database, $mQuery) or die("Could not execute sql command.");
  if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    $query = "INSERT INTO `medical_result` (`result_id`, `result_title`, `result_date`, `patient_id`, `employee_id`, `prescription_id`) VALUES ('$resultId', '$resultTitle', '$resultDate', '$patientId', '$employeeId', $prescriptId);";

    if (mysqli_query($database, $query))
    {
      mysqli_close($database);
      echo "Record has been added successfully";
      return "Record has been added successfully";
     }
    else 
    {
      mysqli_close($database);
      echo "Error! Something Went Wrong";
      return "Error! Something Went Wrong";
    }

  }
  else 
  {
      mysqli_close($database);
      echo "Record Not Found";
      return "Record Not Found";
  }

}

if(isset($_POST['update']))
{ 
  $resultId = $_POST['result_id'];
  $resultTitle = $_POST['result_title'];
  $resultDate = $_POST['result_date'];
  $patientId = $_POST['patient_id'];
  $employeeId = $_POST['employee_id'];
  $prescriptId = $_POST['prescription_id'];

  $database = mysqli_connect("127.0.0.1", "root", "1234567890") or die("Could not open database");
    mysqli_select_db($database, "ehospital") or die("Could not select database");

  if($resultId ==""||$resultId==null)
  {
    echo "Result Not Found. Please Try Again.";
    return false;
  }

  $mQuery = "SELECT * FROM `medical_result` WHERE `medical_result`.`result_id` = '$resultId';";
  $result = mysqli_query($database, $mQuery) or die("Could not execute sql command.");
  if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    $query = "UPDATE `medical_result` SET `medical_result`.`result_title` = '$resultTitle', `medical_result`.`result_date` = '$resultDate', `medical_result`.`patient_id` = '$patientId', `medical_result`.`employee_id` = '$employeeId', `medical_result`.`prescription_id` = '$prescriptId' WHERE `medical_result`.`result_id` = '$resultId';";

    if (mysqli_query($database, $query))
    {
      mysqli_close($database);
      echo "Record has been updated successfully";
      return "Record has been updated successfully";
     }
    else 
    {
      mysqli_close($database);
      echo "Error! Something Went Wrong";
      return "Error! Something Went Wrong";
    }

  }
  else 
  {
      mysqli_close($database);
      echo "Record Not Found";
      return "Record Not Found";
  }

}

if(isset($_POST['delete']))
{
  $resultId = $_POST['result_id'];

  $database = mysqli_connect("127.0.0.1", "root", "1234567890") or die("Could not open database");
    mysqli_select_db($database, "ehospital") or die("Could not select database");

  if($resultId ==""||$resultId==null)
  {
    echo "Result Not Found. Please Try Again.";
    return false;
  }

  $mQuery = "SELECT * FROM `medical_result` WHERE `medical_result`.`result_id` = '$resultId';";
  $result = mysqli_query($database, $mQuery) or die("Could not execute sql command.");
  if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    $query = "DELETE FROM `medical_result` WHERE `medical_result`.`result_id` = '$resultId';";

    if (mysqli_query($database, $query))
    {
      mysqli_close($database);
      echo "Record has been deleted successfully";
      return "Record has been deleted successfully";
     }
    else 
    {
      mysqli_close($database);
      echo "Error! Something Went Wrong";
      return "Error! Something Went Wrong";
    }

  }
  else 
  {
      mysqli_close($database);
      echo "Record Not Found";
      return "Record Not Found";
  }

}

?>

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