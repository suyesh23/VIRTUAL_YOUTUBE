<?php
$con = mysqli_connect("localhost","root","password","youtube");
?>

<!DOCTYPE html>

<head>
<meta charset ="utf-8"/>
</head>

<body>

<?php

if(isset($_GET['vid']))
{
	$id = $_GET['vid'];
	$q = "select vtittle from video where vid=$id";
	$query= mysqli_query($con,$q);
	//$result = mysqli_query( $q );
	if( $query )
	{
		while($row=mysqli_fetch_assoc($query))
		{
			$name=$row['vtittle'];
		}
		echo "you are watching" .$name."<br>";
		echo "<video width='400' controls><source src='upload/".$name."' type='video/webm'></video>";
	}
	else
	{
		printf("error: %s\n", mysqli_error($con));
	}
}
?>

</body>
</html>