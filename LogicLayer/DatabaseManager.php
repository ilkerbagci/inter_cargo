<?php 
	require_once("..//DataLayer/DB.php");
	require_once("Cargo.php");
	require_once("address.php");
	
	

	
	class UserManager {
		
		public static function insertCargo () 
		{
				$db = new DB();
				$result = $db->executeQuery("insert into cargo (fromid,toid) VALUES(1,1)");
				/*
				$allUsers = array();
				
				while($row = $result->fetch_assoc()) {
					$userObj = new User($row["ID"], $row["Name"], $row["Phone"]);
					array_push($allUsers, $userObj);
				}
				*/
				return $result;
			}
			
			
			public static function insertWithTC () 
			{
				$db = new DB();
				$result = $db->getDataTable("");
			}
						

			
			public static function insertNewUser($name,$surname,$address) 
			{
					$db = new DB();

					$result = $db->getDataTable("SELECT * FROM `persontc` WHERE name='".$name."' and surname='".$surname."'");
					$row =$result->fetch_assoc();
						if($row["id"]==NULL)
						{
							$success = $db->executeQuery("INSERT INTO persontc (name,surname,address_id) values ('".$name."','".$surname."',".$address.")");
							$result = $db->getDataTable("SELECT  * FROM `persontc` WHERE 1 ORDER BY id DESC LIMIT 1");
							$row =$result->fetch_assoc();
							return $row["id"];
						}
						else 
						{
							return $row["id"];
						}				
			}
			public static function insertAddress($country, $city) 
			{
					$db = new DB();
					$result = $db->getDataTable("SELECT * FROM `address` WHERE country='".$country."' and city='".$city."'");
					$row =$result->fetch_assoc();
						if($row["city"]==NULL)
							{
								$success = $db->executeQuery("insert into address (country,city) VALUES('".$country."','".$city."')");
								$result = $db->getDataTable("SELECT  * FROM `address` WHERE 1 ORDER BY id DESC LIMIT 1");
								$row =$result->fetch_assoc();
								return $row["id"];
								
							}
						else 
							{
							return $row["id"];
							}
			}
			public static function insertNewCargo ($cargoObj) 
			{

				$addresssender=UserManager::insertAddress($cargoObj->getsenderCountry(), $cargoObj->getsenderCity());
				$addressreceiver=UserManager::insertAddress($cargoObj->getreceiverCountry(), $cargoObj->getreceiverCity());
				$senderid=UserManager::insertNewUser($cargoObj->getsenderName(),$cargoObj->getsenderSurname(),$addresssender);
				$receiverid=UserManager::insertNewUser($cargoObj->getreceiverName(),$cargoObj->getreceiverSurname(),$addressreceiver);
				$weight=$cargoObj->getcweight();
				$volume=$cargoObj->getcvolume();
				
				$db = new DB();
				$result = $db->executeQuery("insert into cargo (fromid,toid,weight,volume) values(".$senderid.",".$receiverid.",".$weight.",".$volume.")");
				
			}
			
			
			
			public static function mycargo ($id) 
			{
				$db = new DB();
				$result = $db->getDataTable("select * from cargo where id=".$id.";");
				$row =$result->fetch_assoc();
				$resultr = $db->getDataTable("SELECT * FROM `persontc` WHERE id=".$row["toid"]."");
				$rowr =$resultr->fetch_assoc();
				$results = $db->getDataTable("SELECT * FROM `persontc` WHERE id=".$row["fromid"]."");
				$rows =$results->fetch_assoc();
				
				$cargoObj = new Cargo($rowr["name"],$rows["name"],$rowr["surname"],$rows["surname"],"","","","",$row["weight"],$row["volume"]); 
				return $cargoObj;
			}
			
			
	
		}

			
					
			$weight=1;
			$volume=2;
			$cargodetail="yok";
			$address2=3;

		
			
			

			
	
	?>