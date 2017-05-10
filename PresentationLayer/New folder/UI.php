
<!DOCTYPE html>
<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP :: 3 Tier Architecture</title>
		<link rel="stylesheet" type="text/css" href="style/site.css">
	</head>
	<body> 
			<div id="dvMain">
			
			<form action="PresentationLayer/UI2.php" method="POST">
				<table>
					<tbody>
						<tr>
							<td colspan="3"><input type="submit" name="sub1" value="Add New Cargo" /></td>
						</tr>
					</tbody>
				</table>
			</form>
			
			<br><br><br>
			
			<form action="PresentationLayer/UI2.php" method="POST">
				<table>
					<tbody>
						<tr>
							<td colspan="3">Where is my Cargo</td>
						</tr>
						<tr>
							<td>Name Surname</td>
							<td>:</td>
							<td><input type="text" name="nsname" /></td>
						</tr>

						<tr>
							<td colspan="3"><input type="submit" name="sub2" value="Search" /></td>
						</tr>
					</tbody>
				</table>
			</form>
			
		</div>
	</body> 
</html>
