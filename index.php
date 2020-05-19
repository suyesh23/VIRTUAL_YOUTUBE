<!DOCTYPE html>
<head>
<meta charset ="utf-8"/>
</head>


<body>

	<a href="video.php">videos</a><br/>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="file"/>
		<input type="submit" name="submit" value="Upload"/>

		<select>
			<option value="DBMS">dbms</option>
			<option value="Probability">Prob</option>
			<option value="Management">ME</option>
			<option value="Python">Py</option>
			<option value="Fafl">fafl</option>
		</select>
	</form>

<?php

$con=mysqli_connect("localhost","root","password","youtube");

if(isset($_POST['submit']))
{
	$name=$_FILES['file']['name'];
	$temp=$_FILES['file']['tmp_name'];
	

	move_uploaded_file($temp,"upload/".$name);
	$q="INSERT INTO video(vid,vtittle,vcat) VALUES (NULL,'$name','')";
	if(mysqli_query($con,$q))
	{
		echo "submitted to database ...";
	}
	else
	{
		printf("error: %s\n", mysqli_error($con));
	}
		echo "<br>".$name." has been uploaded.";
}
?>
</body>
</html>