<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<header>
	<div class="biodata">
		<h1>BIODATA</h1>
	</div>
</header>
<body>
	<form action="biodata.php" method="POST">
	<div class="table1">
	<table border="0">
		<tr>
			<td>
				<h2>PERSONAL BACKGROUND:</h2>
			</td>
		</tr>
		<tr>
			<td><label>Name:</label></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><label>Present Address:</label></td>
			<td><input type="text" name="preaddress"></td>
		</tr>
		<tr>
			<td><label>Permanent Address:</label></td>
			<td><input type="text" name="peraddress"></td>
		</tr>
		<tr>
			<td><label>Date of Birth:</label></td>
			<td><input type="text" name="dbirth"></td>
		</tr>
		<tr>
			<td><label>Religion:</label></td>
			<td><input type="text" name="religion"></td>
		</tr>
		<tr>
			<td><label>Civil Status:</label></td>
			<td><input type="text" name="civilstatus"></td>
		</tr>
		<tr>
			<td><label>Age:</label></td>
			<td><input type="number" name="age"></td>
		</tr>
		<tr>
			<td><label>Citizenship:</label></td>
			<td><input type="text" name="citizen"></td>
		</tr>
		<tr>
			<td><label>Weight</label></td>
			<td><input type="text" name="weight"></td>
		</tr>
		<tr>
			<td><label>Place of Birth:</label></td>
			<td><input type="text" name="pbirth"></td>
		</tr>
		<tr>
			<td><label>Height:</label></td>
			<td><input type="text" name="height"></td>
		</tr>
		<tr>
			<td><label>Name of Father:</label></td>
			<td><input type="text" name="father"></td>
		</tr>
		<tr>
			<td><label>Name of Mother:</label></td>
			<td><input type="text" name="mother"></td>
		</tr>
		<tr>
			<td><label>Address:</label></td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td><label>Languages or Dialects Spoken:</label></td>
			<td><input type="text" name="languange"></td>
		</tr>
		<tr>
			<td><label>Person to be Notified in Case of Emergency:</label></td>
			<td><input type="text" name="emergency"></td>
		</tr>
		</table>
	</div>
	<div class="table2">
	<table border="0">
		<tr>
			<td>
				<h2>EDUCATIONAL BACKGROUND:</h2>
			</td>
		</tr>
		<tr>
			<td><label>Elementary:</label></td>
			<td><input type="text" name="elementary"></td>
		</tr>
		<tr>
			<td><label>Year Graduated:</label></td>
			<td><input type="text" name="graduated1"></td>
		</tr>
		<tr>
			<td><label>High School:</label></td>
			<td><input type="text" name="highschool"></td>
		</tr>
		<tr>
			<td><label>Year Graduated:</label></td>
			<td><input type="text" name="graduated2"></td>
		</tr>
		<tr>
			<td><label>College:</label></td>
			<td><input type="text" name="college"></td>
		</tr>
		<tr>
			<td><label>Year Graduated:</label></td>
			<td><input type="text" name="graduated3"></td>
		</tr>
		<tr>
			<td><label>Course:</label></td>
			<td><input type="text" name="course"></td>
		</tr>
		<tr>
			<td><label>Special Skills:</label></td>
			<td><input type="text" name="skills"></td>
		</tr>

		<tr>
				<td></td>
				<td><br><b></b><input type="submit" value=" Display Information " name="btnDisplay"></td>
		</tr>
		
	</table>
	</div>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<?php
	//initializing
	if (isset($_POST['btnDisplay'])){
		$name =$_POST['name'];
		$preaddress =$_POST['preaddress'];
		$peraddress =$_POST['peraddress'];
		$dbirth =$_POST['dbirth'];
		$civilstatus =$_POST['civilstatus'];
		$citizen =$_POST['citizen'];
		$pbirth =$_POST['pbirth'];
		$father =$_POST['father'];
		$mother =$_POST['mother'];
		$address =$_POST['address'];
		$languange =$_POST['languange'];
		$emergency =$_POST['emergency'];
		$religion =$_POST['religion'];
		$age =$_POST['age'];
		$weight =$_POST['weight'];
		$height =$_POST['height'];
		$elementary =$_POST['elementary'];
		$highschool =$_POST['highschool'];
		$college =$_POST['college'];
		$course =$_POST['course'];
		$skills =$_POST['skills'];
		$graduated1 =$_POST['graduated1'];
		$graduated2 =$_POST['graduated2'];
		$graduated3 =$_POST['graduated3'];

		echo "<div class='table1'>";
		echo "<table border='0'>";
		echo "<tr>";
			echo "<td>";
				echo "<h2>PERSONAL BACKGROUND:</h2>";
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Name:</td>";
			echo "<td>" .$name . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Present Address:</td>";
			echo "<td>" .$preaddress . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Permanent Address:</td>";
			echo "<td>" .$peraddress . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Date of Birth:</td>";
			echo "<td>" .$dbirth . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Religion:</td>";
			echo "<td>" .$religion . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Civil Status:</td>";
			echo "<td>" .$civilstatus . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Age:</td>";
			echo "<td>" .$age . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Citizenship:</td>";
			echo "<td>" .$citizen . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Weight:</td>";
			echo "<td>" .$weight . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Place of Birth:</td>";
			echo "<td>" .$pbirth . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Height:</td>";
			echo "<td>" .$height . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Name of Father:</td>";
			echo "<td>" .$father . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Name of Mother:</td>";
			echo "<td>" .$mother . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Address:</td>";
			echo "<td>" .$address . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Languages or Dialects Spoken:</td>";
			echo "<td>" .$languange . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Person to be Notified in Case of Emergency:</td>";
			echo "<td>" .$emergency . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";

echo "<div class='table2'>";
	echo "<table border='0'>";
		echo "<tr>";
			echo "<td>";
				echo "<h2>EDUCATIONAL BACKGROUND:</h2>";
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
		    echo "<td>Elementary:</td>";
			echo "<td>" .$elementary . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Year Graduated:</td>";
			echo "<td>" .$graduated1 . "</td>";
		echo "</tr>";
		echo "<tr>";
		    echo "<td>High School:</td>";
			echo "<td>" .$highschool . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Year Graduated:</td>";
			echo "<td>" .$graduated2 . "</td>";
		echo "</tr>";
		echo "<tr>";
		    echo "<td>College:</td>";
			echo "<td>" .$college . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Year Graduated:</td>";
			echo "<td>" .$graduated3 . "</td>";
		echo "</tr>";
		echo "<tr>";
		    echo "<td>Course:</td>";
			echo "<td>" .$course . "</td>";
		echo "</tr>";
		echo "<tr>";
		    echo "<td>Special Skills:</td>";
			echo "<td>" .$skills . "</td>";
		echo "</tr>";
		echo "</div>";
		echo "</table>";
    
    }
?>
		
</form>
</body>
</html>