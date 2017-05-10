<?php 
	require_once("DatabaseManager.php");	
	require_once("Cargo.php");
	
$result1="";
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$type=$_POST['type'];	
	if($type==1)
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
		
		$cargoObj = new Cargo($rname,$sname,$rsurname,$ssurname,$rcountry,$scountry,$rcity,$scity,$cweight,$cvolume); 
		$result1 = UserManager::insertNewCargo($cargoObj);
		
		}
	else if($type==2)
		{
			$id=$_POST['id'];
			$result1 = UserManager::mycargo($id);
			 
		}
}




	exit($result1);
?>