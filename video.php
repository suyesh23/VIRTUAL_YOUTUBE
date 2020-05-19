<?php
$con = mysqli_connect("localhost","root","password","youtube");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1//DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$q="select * from video";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($query))
{
$id=$row['vid'];
$name=$row['vtittle'];
//
//
echo "<a href='watch.php?vid=$id'>$name</a><br>";
}
?>
</body>
</html>