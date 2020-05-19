<?php
$con=mysqli_connect("localhost","root","password","youtube");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 </head>
<body>
 
<div id="body">
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
     
     
    <td>View</td>
    </tr>
    <?php
 $sql="SELECT * FROM video";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_assoc($result_set))
 {
	 $pat ="upload/"; 
	 $pat1 ="http://localhost/ET_DB/upload/";
	 $path = $row['vtittle'];
	   $vid = $pat1.$path
  ?>
        <tr>
			
        <td>

		<embed src="<?php echo $vid ?>">
		<video width='320' height='240' controls> <source src="<?php echo $vid ?>" type='video/mp4'>Your browser does not support the video tag.</source></video>
		<video width="320" height="240" controls> <source src="upload/How To Host A PHP Website From Your Home Computer (Localhost).mp4" type="video/mp4">Your browser does not support the video tag.</source></video>
	</td>
        </tr>
        
 <?php
 }
 ?>
    </table>
    
</div>
</body>
</html>