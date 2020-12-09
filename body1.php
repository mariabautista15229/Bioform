<!DOCTYPE_html>
<html>
<head>

	<title>Bio</title>
	<link type="text/css" rel="stylesheet" href="css/kulay.css" />
</head>
<body>
<div>
	<form method="POST" enctype="multipart/form-data">
	<h1 id="title3">BIODATA</h1>
	<tr>
		
		<td><label id="input1">Name </label></td>
		<td><input class="input1" type="text" name="name"></td>
		</br>
	</tr>

	<tr>
		
		<td><label id="input2">Present Address </label></td>
		<td><input class="input2" type="text" name="preadd"></td>
		</br>
	</tr>

	<tr>
		
		<td><label id="input3">Permanent Address </label></td>
		<td><input class="input3" type="text" name="permadd"></td>
		</br>
	</tr>

	<tr>
		
		<td><label id="input4">Date of Birth </label></td>
		<td><input class="input4" type="date" name="birth"></td>

	</tr>

	<tr>
		<td><label id="input5">Religion </label></td>
		<td><input class="input5" type="text" name="religion"></td>
	</tr>

	<tr>
		
		<td><labe id="input9">Civil Status </label></td>
		<td><input class="input9" type="radio" value="Active" name="check" >Single
		<input type="radio" value="Inactive" name="check" >Married</td>
	</tr>

	<tr>
		<td><label id="input6">Age </label></td>
		<td><input class="input6" type="number" name="age"></td>
		</br>
	</tr>

	<tr>
		
		<td><label id="input10">Citizenship </label></td>
		<td><select class="input10" name="citizenship">
		<option value="Filipino">Filipino</option>
		<option value="Resident Foriegner">Resident Foriegner</option>
		<option value="non">Non Resident Foriegner</option>

			</select>
		</td>
	</tr>

	<tr>
		<td><label id="input7">Weight </label></td>
		<td><input class="input7" type="number" name="weight"></td>
	</tr>

	<tr>
		<br>
		<td><label id="input11">Place of Birth </label></td>
		<td><input class="input11" type="text" name="place"></td>
	</tr>

	<tr>
		<td><label id="input8">Height </label></td>
		<td><input class="input8" type="number" name="height"></td>
	</tr>

	<tr>
		<td><label id="input12">Name of Father </label></td>
		<td><input class="input12" type="text" name="father"></td>
		</br>
	</tr>

	<tr>
		<td><label id="input13">Name of Mother </label></td>
		<td><input class="input13" type="text" name="mother"></td>
		</br>
	</tr>

	<tr>
		<td><label id="input14">Address </label></td>
		<td><input class="input14" type="text" name="address"></td>
		</br>
	</tr>

	<tr>
		<td><label id="input15">Languages or Dialects Spoken </label></td>
		<td><input class="input15" type="text" name="language"></td>
		</br>
	</tr>

	<tr>
		<td><label id="input16">Person to be notified In Case of Emergency </label></td>
		<td><input class="input" type="text" name="notify"></td>
	</tr>

<br>
<br>

<br>
	<h2 id="title2">EDUCATIONAL BACKGROUND</h2>
	</br>

	<tr>
		<td><label id="input17">Elementary </label></td>
		<td><input class="input17" type="text" name="elem"></td>
		
	</tr>

	<tr>
		<td><label id="input20">Year Graduated </label></td>
		<td><input class="input20" type="number" name="year1"></td>
		</br>
	</tr>

	<tr> 
		<td><label id="input18">High School </label></td>
		<td><input class="input18" type="text" name="high"></td>
	</tr>

	<tr>
		<td><label id="input21">Year Graduated </label></td>
		<td><input class="input21" type="number" name="year2"></td>
	</tr>

	<tr>
		<td><label id="input19">College </label></td>
		<td><input class="input19" type="text" name="college"></td>
	</tr>

	<tr>
		<td><label id="input22">Year Graduated </label></td>
		<td><input class="input22" type="number" name="year3"></td>
		</br>
	</tr>

	<tr>
		<td><label id="input23">Course </label></td>
		<td><input class="input23" type="text" name="course"></td>
		</br>
	</tr>

	<tr>
		<td><label id="input24">Special Skills </label></td>
		<td><input class="input24" type="text" name="special"></td>
		</br>
	</br>
	</tr>

	<tr>
      <td><input class="submit" type="submit" value="Submit" name="btnSubmit"></td>
      <br>
      <br>
    </tr>
</form>
</div>
<?php
if (isset($_POST['btnSubmit'])) {

	$Name = $_POST['name'];
  	$Preadd = $_POST['preadd'];
  	$Permadd = $_POST['permadd'];
  	$Birth = $_POST['birth'];
 	$Religion = $_POST['religion'];
  	$Age = $_POST['age'];
  	$Citizenship = $_POST['citizenship'];
  	$Weight = $_POST['weight'];
 	$Place = $_POST['place'];
  	$Height = $_POST['height'];

  	$Father = $_POST['father'];
  	$Mother = $_POST['mother'];
  	$Address = $_POST['address'];
  	$Language = $_POST['language'];
 	$Notify = $_POST['notify'];
  	$Elem = $_POST['elem'];
  	$Year1 = $_POST['year1'];
  	$High = $_POST['high'];
 	$Year2 = $_POST['year2'];
  	$College = $_POST['college'];

  	$Year3= $_POST['year3'];
 	$Course = $_POST['course'];
  	$Special = $_POST['special'];

  	 echo "<center><table bgcolor='white' border=3px cellspacing=0 cellpading=0> 
<tr> <td><font color=grey>";

	echo "<center><font size='5'><strong>RECORDED</strong></center></font>";
  	

  	echo "<center><strong>BIODATA</strong></center>";
  	echo "<br>";

  	echo "<strong>Name :</strong>" .$Name;
  	echo "<br>";

  	echo "<strong>Present Address :</strong>" .$Preadd;
  	echo "<br>";

  	echo "<strong>Permanent Address :</strong>" .$Permadd;
  	echo "<br>";

  	echo "<strong>Date of Birth :</strong>" .$Birth;
  	echo "<br>";

  	echo "<strong>Religion :</strong>" .$Religion;
  	echo "<br>";

  	echo "<strong>Civil Status :</strong>";
  	echo "<br>";

  	echo "<strong>Age :</strong>" .$Age;
  	echo "<br>";

  	echo "<strong>Citizenship :</strong>" .$Citizenship;
  	echo "<br>";

  	echo "<strong>Weight :</strong>" .$Weight;
  	echo "<br>";

  	echo "<strong>Place of Birth :</strong>" .$Birth;
  	echo "<br>";

  	echo "<strong>Height :</strong>" .$Height;
  	echo "<br>";
  	
  	echo "<strong>Name of Father :</strong>" .$Father;
  	echo "<br>";

  	echo "<strong>Name of Mother :</strong>" .$Mother;
  	echo "<br>";

  	echo "<strong>Address :</strong>" .$Address;
  	echo "<br>";

  	echo "<strong>Language or Dialects Spoken :</strong>" .$Language;
  	echo "<br>";

  	echo "<strong>Person to be notified In Case of Emergency :</strong>" .$Notify;
  	echo "<br>";
  	echo "<br>";

	echo "<center><strong>EDUCATIONAL BACKGROUND</strong></center>";
 	echo "<br>";

 	echo "<strong>Elementary :</strong>" .$Elem;
  	echo "<br>";

  	echo "<strong>Year Graduated :</strong>" .$Year1;
  	echo "<br>";

  	echo "<strong>High School :</strong>" .$High;
  	echo "<br>";

  	echo "<strong>Year Graduated :</strong>" .$Year2;
  	echo "<br>";

  	echo "<strong>College :</strong>" .$College;
  	echo "<br>";

  	echo "<strong>Year Graduated :</strong>" .$Year3;
  	echo "<br>";

  	echo "<strong>Course :</strong>" .$Course;
  	echo "<br>";

  	echo "<strong>Special Skills :</strong>" .$Special;
  	echo "<br>";
  	echo "<br>";


}
?>

</body>
</html>