<!DOCTYPE html>
<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP :: 3 Tier Architecture</title>
		<link rel="stylesheet" type="text/css" href="../style/site.css">
	</head>
	<body> 
	
		<form action="UI2.php" method="POST">
		<div id="dvMain">
					
						<table>
							<tbody>
							
								<tr>
									<td colspan="3"><h3>Information of Sender</h3></td>
								</tr>
								
								
								
								<tr>
									<td colspan="3"><input type="radio" name="gender" value="male"> With T.C.</td>
								</tr>
								
								
								<tr>
									<td>T.C</td>
									<td>:</td>
									<td><input type="text" name="tc" value="<?php  if(isset($_POST["tc"])) {$temp=$_POST["tc"]; echo $temp; }?>" /></td>
								</tr>
								
								
								
								<tr>
									<td colspan="3"><input type="radio" name="gender" value="male"> Without T.C</td>
								</tr>
								
								
								
								<tr>
									<td>Name Surname</td>
									<td>:</td>
									<td><input type="text" name="namesurname" value="<?php  if(isset($_POST["namesurname"])) {$temp2=$_POST["namesurname"]; echo $temp2; }?>" /></td>
								</tr>
								<tr>
									<td>Country</td>
									<td>:</td>
										<td> 
											<?php
											$app_list = file_get_contents('http://localhost:8080/api.php?action=get_app_list');
										    $app_list = json_decode($app_list, true);?>
											<select onchange="this.form.submit()" name="ddlViewBy">
											<?php if(!isset($_POST['ddlViewBy'])) {$temp3="";}else {$temp3=$_POST['ddlViewBy'];}
											foreach ($app_list as $app): ?>
											<option value="<?php echo $app["name"] ?>"<?php if($temp3==$app["name"]) echo 'selected="selected"';?>> <?php echo $app["name"] ?></option>
											<?php endforeach; ?>
											</select>
											
										</td>
								</tr>
																<tr>
									<td>City</td>
									<td>:</td>
									      <td> 
											<?php
											$temp3 = str_replace(' ', '', $temp3);
											$app_list = file_get_contents('http://localhost:8080/api.php?action=city_finding&country='.$temp3);
										    $app_list = json_decode($app_list, true);?>
											
											<select name="ddlViewBy3">
											<?php if(!isset($_POST['ddlViewBy3'])) {$temp7="";}else {$temp7=$_POST['ddlViewBy3'];}
											foreach ($app_list as $app): ?>
											<option value="<?php echo $app["name"] ?>"<?php if($temp7==$app["name"]) echo 'selected="selected"';?>    > <?php echo $app["name"] ?></option>
											<?php endforeach;?>
											</select>
										  </td>
								</tr>
								<tr>
									<td colspan="3"><input type="submit" name="sub1" value="SEND-POST" /></td>
								</tr>
							</tbody>
						</table>
					
		</div>
				<div id="dvMain">
					
						<table>
							<tbody>
							
								<tr>
									<td colspan="3"><h3>Information of Sender</h3></td>
								</tr>
								
								
								
								<tr>
									<td colspan="3"><input type="radio" name="gender" value="male"> With T.C.</td>
								</tr>
								
								
								<tr>
									<td>T.C</td>
									<td>:</td>
									<td><input type="text" name="tcoftaker" value="<?php  if(isset($_POST["tcoftaker"])) {$temp4=$_POST["tcoftaker"]; echo $temp4; }?>" /></td>
								</tr>
								
								
								
								<tr>
									<td colspan="3"><input type="radio" name="gender" value="male"> Without T.C</td>
								</tr>
								
								
								
								<tr>
									<td>Name Surname</td>
									<td>:</td>
									<td><input type="text" name="namesurnameoftaker" value="<?php  if(isset($_POST["namesurnameoftaker"])) {$temp5=$_POST["namesurnameoftaker"]; echo $temp5; }?>" /></td>
								</tr>
								<tr>
									<td>Country</td>
									<td>:</td>
										<td> 
											<?php
											$app_list = file_get_contents('http://localhost:8080/api.php?action=get_app_list');
										    $app_list = json_decode($app_list, true);?>
											<select onchange="this.form.submit()" name="ddlViewBy2">
											<?php if(!isset($_POST['ddlViewBy2'])) {$temp6="";}else {$temp6=$_POST['ddlViewBy2'];}
											foreach ($app_list as $app): ?>
											<option value="<?php echo $app["name"] ?>"<?php if($temp6==$app["name"]) echo 'selected="selected"';?>> <?php echo $app["name"] ?></option>
											<?php endforeach; ?>
											</select>
											
										</td>
								</tr>
																<tr>
									<td>City</td>
									<td>:</td>
									      <td> 
											<?php
											$temp6= str_replace(' ', '', $temp6);
											$app_list = file_get_contents('http://localhost:8080/api.php?action=city_finding&country='.$temp6);
										    $app_list = json_decode($app_list, true);?>
											
											<select name="ddlViewBy4">
											<?php if(!isset($_POST['ddlViewBy4'])) {$temp8="";}else {$temp8=$_POST['ddlViewBy4'];}
											foreach ($app_list as $app): ?>
											<option value="<?php echo $app["name"] ?>"<?php if($temp8==$app["name"]) echo 'selected="selected"';?>    > <?php echo $app["name"] ?></option>
											<?php endforeach;?>
											</select>
										  </td>
								</tr>
								<tr>
									<td colspan="3"><input type="submit" name="sub1" value="SEND-POST" /></td>
								</tr>
							</tbody>
						</table>
					
		</div>
		</form>

	
	
	</body> 
</html>

