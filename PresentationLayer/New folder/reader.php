<!DOCTYPE html>
<html>
<body>

<button onclick="changeText()">Bas</button>
<p id="demo">sad</p>

<?php
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						
					
						$firstname = $_POST["hey"];	
						
						echo "Name Surname: '" . $firstname . "'<br><br>";
					
					}
					else {
						echo "There is no variable with POST<br><br>";
					}
				?>
<script>
sayı=0;
function changeText(){
document.getElementById("demo").innerHTML =sayı;
sayı++;
}
</script>

</body>
</html>