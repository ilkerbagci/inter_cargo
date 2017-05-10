<?php

$country ="";
if($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['str']) ) 
{
$country = $_POST['str'];	
}



if($country=="")
{
$app_list = file_get_contents('http://localhost:8080/api.php?action=get_app_list');
$app_list = json_decode($app_list, true);  
}
else
{
$app_list = file_get_contents('http://localhost:8080/api.php?action=city_finding&country='.$country);
$app_list = json_decode($app_list, true);  
}


exit(json_encode($app_list));



?>