<?php 
	require_once("DatabaseManager.php");	
	require_once("Cargo.php");
	




	$rname="33";	
	$sname="323";
	$rsurname="332";
	$ssurname="323";
	$rcountry="332";
	$scountry="332";
	$rcity="323";
	$scity="323";
	$cweight=332;
	$cvolume=332;


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$rname=$_POST['rname'];	
	$sname=$_POST['sname'];
	$rsurname=$_POST['rsurname'];
	$ssurname=$_POST['ssurname'];
	$rcountry=$_POST['rcountry'];
	$scountry=$_POST['scountry'];
	$rcity=$_POST['rcity'];
	$scity=$_POST['scity'];
	$cweight=$_POST['cweight'];
	$cvolume=$_POST['cvolume'];


}

$cargoObj = new Cargo($rname,$sname,$rsurname,$ssurname,$rcountry,$scountry,$rcity,$scity,$cweight,$cvolume);

	
	$errorMeesage = "";
	 
		$result1 = UserManager::insertNewCargo($cargoObj);
		if(!$result1) 
		{
			$errorMeesage = "Yeni kullanýcý kaydý baþarýsýz!";
		}

	exit($result1);
?>