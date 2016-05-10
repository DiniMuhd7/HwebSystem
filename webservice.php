   <script>
    function submitForm(action)
    {
        document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }

	</script>

<title>Web Client</title>

<body>

<br>Developer - Deen Adam.<br>
<br><br>------------------------------------------------------------------------------------------------<br>
<br><br>Please Enter Information to Add/Update.<br>
Enter PatientID to Delete/View, and leave PatientID as blank to view all records.</p>

<form id="form1" name="form1" method="post" action ="">
    <table width="334" border="1">
      <tr>
        <td width="145">Patient ID</td>
        <td width="173"><label for="patient"></label>
        <input type="text" name="patient" id="patient" /></td>
      </tr>
      <tr>
        <td>Full Name</td>
        <td><label for="fullname"></label>
        <input type="text" name="fullname" id="fullname" /></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><label for="address"></label>
        <input type="text" name="address" id="address" /></td>
      </tr>
      <tr>
        <td>Hospital</td>
        <td><label for="hospital"></label>
        <input type="text" name="hospital" id="hospital" /></td>
      </tr>
      <tr>
        <td>Sickness</td>
        <td><label for="sickness"></label>
        <input type="text" name="sickness" id="sickness" /></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><label for="phone"></label>
        <input type="text" name="phone" id="phone" /></td>
      </tr>
      <tr>
        <td>Birthday</td>
        <td><label for="birthday"></label>
        <input type="text" name="birthday" id="birthday" /></td>
      </tr>
    </table>
    <input type="submit" name="Add" id="Add" value="Add"  />
    <input type="submit" name="Update" id="Update" value="Update">
    <input type="submit" name="Delete" id="Delete" value="Delete">
  <input type="submit" name="View" id="View" value="View">
  <input type="reset" name="reset" id="reset" value="Reset" />
  </form>
  
  <?php
$response = "";
// Make sure you edit php.ini file which you can find it inside your webserver php folder.
// Open the php.ini file and enable soap client to avoid having errors.
$client = new SoapClient("catalog.wsdl");

	
if(isset($_POST['Add']))
{ 
	$c = $_POST['patient'];
  $f = $_POST['fullname'];
	$j = $_POST['address'];
	$s = $_POST['hospital'];
	$e = $_POST['sickness'];
	$t = $_POST['phone'];
	$a = $_POST['birthday'];
	$response = $client->addCatalogEntry($c,$f,$j,$s,$e,$t,$a);
	echo $response;
}

if(isset($_POST['Update']))
{ 
	$c = $_POST['patient'];
  $f = $_POST['fullname'];
  $j = $_POST['address'];
  $s = $_POST['hospital'];
  $e = $_POST['sickness'];
  $t = $_POST['phone'];
  $a = $_POST['birthday'];
	$response = $client->editCatalogEntry($c,$f,$j,$s,$e,$t,$a);
	echo $response;
}

if(isset($_POST['Delete']))
{ 
	$c = $_POST['patient'];
  $f = $_POST['fullname'];
  $j = $_POST['address'];
  $s = $_POST['hospital'];
  $e = $_POST['sickness'];
  $t = $_POST['phone'];
  $a = $_POST['birthday'];
	$response = $client->delCatalogEntry($c);
	echo $response;
}

if(isset($_POST['View']))
{ 
	$c = $_POST['patient'];
  $f = $_POST['fullname'];
  $j = $_POST['address'];
  $s = $_POST['hospital'];
  $e = $_POST['sickness'];
  $t = $_POST['phone'];
  $a = $_POST['birthday'];
	$response = $client->getCatalogEntry($c);
	echo $response;
}
?>
</body>
</html>