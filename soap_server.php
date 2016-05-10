<?php 

// Author
// Deen Adam
	
function getCatalogEntry($patientId) { 

  $database = mysql_connect("localhost", "root", "root") or die("Could not open database");
  mysql_select_db("webservice", $database) or die("Could not select database");
  
   if($patientId==""||$patientId==null){
	  $query = "SELECT * FROM patient;";
	}
	else {
	  $query = "SELECT * FROM patient WHERE patient_id = '$patientId';";
	}
  
  $result = mysql_query($query, $database) or die("Could not execute sql command.");
  
  mysql_close($database);

	$response = "<table border=1>
		 			<tr><th>PatientId</th>
		 				<th>FullName</th>
    					<th>Address</th>
						<th>Hospital</th>
						<th>Sickness</th>
						<th>Phone</th>
						<th>Birthday</th>
    				</tr>";
	$count = 0;
	while($row = mysql_fetch_array($result))
	{
	 	 $response = $response."
		  <tr>
			<td>".$row['patient_id']."</td>
    		<td>".$row['fullname']."</td>
			<td>".$row['address']."</td>
			<td>".$row['hospital']."</td>
    		<td>".$row['sickness']."</td>
    		<td>".$row['phone']."</td>
    		<td>".$row['birthday']."</td>
		  </tr>";
		
		
		$count++;
	} 
	$response = $response."</table>";

	echo $response;
	return $response;
} 


function editCatalogEntry($c,$f,$j,$s,$e,$t,$a){
  $database = mysql_connect("localhost", "root", "root") or die("Could not open database");
  mysql_select_db("webservice", $database) or die("Could not select database");
  
  $query = "SELECT * FROM patient WHERE patient_id = '$c';";
  $result = mysql_query($query, $database) or die("Could not execute sql command.");
  if($row = mysql_fetch_array($result))
	{
    	$query = "UPDATE patient SET fullname = '$f',address = '$j',
		hospital = '$s',sickness = '$e',phone = '$t',birthday = '$a' WHERE patient_id = '$c';";
  	
		if(mysql_query($query, $database))
  		{
  		 	mysql_close($database);
			echo "Record edited";
			return "Record edited";
  		}
  		else
		{
			mysql_close($database);
			echo "fail";
			return "fail.";
		}  
	}
	else
	{
	 		mysql_close($database);
			echo "record not found";
	 		return "record not found";
	}	
}


function addCatalogEntry($c,$f,$j,$s,$e,$t,$a){
  $database = mysql_connect("localhost", "root", "root") or die("Could not open database");
  mysql_select_db("webservice", $database) or die("Could not select database");
	$query = "SELECT * FROM patient WHERE patient_id = '$c';";
  $result = mysql_query($query, $database) or die("Could not execute sql command.");
  if($row = mysql_fetch_array($result))
	{  
	 		mysql_close($database);
	 		return "Duplicate record.";
	}
	else
	{	
		$query = "INSERT INTO patient (patient_id, fullname, address, hospital, 
  	sickness, phone, birthday) VALUES ('$c', '$f', '$j', '$s', '$e', '$t', '$a');";
    
  	if(mysql_query($query, $database))
  	{
  	 	mysql_close($database);
  		return "Record added";
  	}
  	else
  	{
  	  mysql_close($database);
  		return "fail.";
  	}  
	}	
	
}




function delCatalogEntry($patientId) { 
  $database = mysql_connect("localhost", "root", "root") or die("Could not open database");
  mysql_select_db("webservice", $database) or die("Could not select database");

  $query = "SELECT * FROM patient WHERE patient_id = '$patientId';";
  $result = mysql_query($query, $database) or die("Could not execute sql command.");
  
  if($row = mysql_fetch_array($result))
	{
   	   $query = "DELETE FROM patient WHERE patient_id = '$patientId';";
	   $result = mysql_query($query, $database) or die("Could not execute sql command.");
	   mysql_close($database);
	   //echo "record removed";
	   return "record removed";
	}
	else
	{
	 	mysql_close($database);
		//echo "record not found";
	 	return "record not found";
	}
} 


ini_set("soap.wsdl_cache_enabled", "0");
ini_set('soap.wsdl_cache_ttl',0); 
$server = new SoapServer("catalog.wsdl"); 
$server->addFunction("getCatalogEntry"); 
$server->addFunction("delCatalogEntry");
$server->addFunction("addCatalogEntry");
$server->addFunction("editCatalogEntry");
$server->handle(); 

?>