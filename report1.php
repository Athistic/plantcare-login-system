<!DOCTYPE html>
<html>

<style>


input{
	padding: 6px;
	font-size: 14px;
	border-radius: 4px;
}

input[type ="checkbox"]{
	height: 16px;
	width: 16px;
}

label{
	width: 240px;
	display: inline-block;
}

textarea{
	padding: 6px;
	font-size: 14px;
}

select{
	padding: 6px;
	font-size: 14px;
	color: grey;
}

</style>
	
<head>
	<title>
	Parent/Guardian Report
	</title>
</head>
<body style="background-color: yellow;">
<form  method="POST">
<table align="center" height="13%">
	<tr>
		<th>
		<h2><b>KHANYISA HIGH SCHOOL</b></h2>
		<h2><b>Progress Report</b></h2>
		</th>
		
		<th align="left-side">
		<img src="KHSlogo.jpeg" width="100">
		</th>
	</tr>
</table>

<p><b><label for="Studentname">Student Name:</label> 
	<input type="text" name="Studentname" class="no-outline" id="" placeholder=""></input>

<p><label for="surname">Student Surname:</label> 
	<input type="text" name="surname" class="no-outline" id="" placeholder=""></input></b></p></p>
<p><b><label for="ID"> Student ID:</label>
	<input type="text" name="ID" class="no-outline" id="" placeholder=""></input></b></p>

			
<p><b><label for="grade">Grade:</label> 
	<input type="text" name="grade" class="no-outline" id="" placeholder=""></input></b></p>

<p><b><label for="term">Term:</label> 
	<input type="text" name="term" class="no-outline" id="" placeholder=""></input></b></p>


<table align="center" style="width:50%; border: 1px solid black;">
          <thead>
            <tr>
              <th>
			  Core Subjects
			  </th>
              
			  <th>
			  Percentages(%)
			  </th>
              
			  <th>
			  Missing Assignment
			  </th>
	      
            </tr>
          </thead>
          
		  <tbody >
            <tr>
              
			  <td>
			  <input type="text" name="CoreSubject1"/>
			  </td>
              
			  <td>
			  <input type="number" name="Percentages1"/>
			  </td>
              
			  <td>
			  <input type="text" name="MissingAssignments1"/>
			  </td>
	      
			</tr>
              
			<tr>
				      
			  <td>
			  <input type="text" name="CoreSubject2"/>
			  </td>
              
			  <td>
			  <input type="number" name="Percentages2"/>
			  </td>
              
			  <td>
			  <input type="text" name="MissingAssignments2"/>
			  </td>
			</tr>
			
			<tr>
			
			  <td>
			  <input type="text" name="CoreSubject3"/>
			  </td>
              
			  <td>
			  <input type="number" name="Percentages3"/>
			  </td>
              
			  <td>
			  <input type="text" name="MissingAssignments3"/>
			  </td>
			</tr>
			
			<tr>
			
			  <td>
			  <input type="text" name="CoreSubject4"/>
			  </td>
              
			  <td>
			  <input type="number" name="Percentages4"/>
			  </td>
              
			  <td>
			  <input type="text" name="MissingAssignments4"/>
			  </td>
			</tr>
			
			<tr>
			
			  <td>
			  <input type="text" name="CoreSubject5"/>
			  </td>
              
			  <td>
			  <input type="number" name="Percentages5"/>
			  </td>
              
			  <td>
			  <input type="text" name="MissingAssignments5"/>
			  </td>
			</tr>
			
			<tr>
			  <td>
			  <input type="text" name="CoreSubject6"/>
			  </td>
              
			  <td>
			  <input type="number" name="Percentages6"/>
			  </td>
              
			  <td>
			  <input type="text" name="MissingAssignments6"/>
			  </td>
			</tr>
			
			<tr>
			
			  <td>
			  <input type="text" name="CoreSubject7"/>
			  </td>
              
			  <td>
			  <input type="number" name="Percentages7"/>
			  </td>
              
			  <td>
			  <input type="text" name="MissingAssignments7"/>
			  </td>
			</tr>
</table>

<br><br><br><br><br>
<fieldset><legend><b>Comments:</b>(All comment are checked/evaluated)</legend><br>
<input type="checkbox" name="Comments" value="Does Good Work" tabindex="1" />Does Good Work<br />
<input type="checkbox" name="Comments" value="Making Progress" tabindex="2" />Making Progress<br />
<input type="checkbox" name="Comments" value="Working Hard" tabindex="3" />Working Hard<br />
<input type="checkbox" name="Comments" value="Absent or tired at class" tabindex="4" />Absent or tired at class<br />
<input type="checkbox" name="Comments" value="Works well with others" tabindex="5" />Works well with others<br />
<input type="checkbox" name="Comments" value="Missing Assignment" tabindex="6" />Missing Assignment<br />
<input type="checkbox" name="Comments" value="Turning his/her work in late" tabindex="1" />Turning his/her work in late<br />
</fieldset>

<br><br>
<p>Please contact me about your child's lack of progress in the area:<select name="Progress">
		<option value="Please choose">Please choose</option>
		<option value="languages">Languages</option>
		<option value="Maths">Maths</option>
		<option value="Science">Science</option>
		<option value="Reading">Reading</option>
</select>

<p align="center"><input style="text-align:center; background-color: grey; color:white" type ="submit" name="Submit Report" value="Submit Report" id="submitReport"></p>
</form>
</body>
</html>

<?php
include("conn.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
	$name = $_POST['Studentname'];
	$surname = $_POST['surname'];
	$ID = $_POST['ID'];
	$grade = $_POST['grade'];
	$term = $_POST['term'];

	$CoreSubject1 = $_POST['CoreSubject1'];
	$Percentages1 = $_POST['Percentages1'];
	$MissingAssignments1 = $_POST['MissingAssignments1'];

	$CoreSubject2 = $_POST['CoreSubject2'];
	$Percentages2 = $_POST['Percentages2'];
	$MissingAssignments2 = $_POST['MissingAssignments2'];

	$CoreSubject3 = $_POST['CoreSubject3'];
	$Percentages3 = $_POST['Percentages3'];
	$MissingAssignments3 = $_POST['MissingAssignments3'];

	$CoreSubject4 = $_POST['CoreSubject4'];
	$Percentages4 = $_POST['Percentages4'];
	$MissingAssignments4 = $_POST['MissingAssignments4'];

	$CoreSubject5 = $_POST['CoreSubject5'];
	$Percentages5 = $_POST['Percentages5'];
	$MissingAssignments5 = $_POST['MissingAssignments5'];

	$CoreSubject6 = $_POST['CoreSubject6'];
	$Percentages6 = $_POST['Percentages6'];
	$MissingAssignments6 = $_POST['MissingAssignments6'];

	$CoreSubject7 = $_POST['CoreSubject7'];
	$Percentages7 = $_POST['Percentages7'];
	$MissingAssignments7 = $_POST['MissingAssignments7'];
	$Comments = $_POST['Comments'];
	
	
	$Progress = $_POST['Progress'];

	$query = "INSERT INTO report1(name,surname,ID,grade,term,CoreSubject1,
	Percentages1,MissingAssignments1,CoreSubject2,
	Percentages2,MissingAssignments2,CoreSubject3,
	Percentages3,MissingAssignments3,CoreSubject4,
	Percentages4,MissingAssignments4,CoreSubject5,
	Percentages5,MissingAssignments5,CoreSubject6,
	Percentages6,MissingAssignments6,CoreSubject7,
	Percentages7,MissingAssignments7,comments,progress) VALUES ('$name','$surname','$ID','$grade','$term','$CoreSubject1','$Percentages1','$MissingAssignments1','$CoreSubject2','$Percentages2','$MissingAssignments2',
		'$CoreSubject3','$Percentages3','$MissingAssignments3',
		'$CoreSubject4','$Percentages4','$MissingAssignments4',
		'$CoreSubject5','$Percentages5','$MissingAssignments5',
		'$CoreSubject6','$Percentages6','$MissingAssignments6',
		'$CoreSubject7','$Percentages7','$MissingAssignments7','$Comments','$Progress')";

		$results = mysqli_query($connection,$query);
		if($results){
			echo '<script type="text/javascript"> alert("Data saved successfully") </script>';
		}else{
			echo '<script type="text/javascript"> alert("Data not saved") </script>';
		}
		
}
 ?>