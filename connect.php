<?php
	
	$username=filter_input(INPUT_POST,'username');
	$password=filter_input(INPUT_POST,'password');
	if(!empty($username)){
		if(!empty($password)){
			$conn = mysqli_connect("localhost","root","password","youtube");
			if(mysqli_connect_error()){
				die('Connect Error ('. mysqli_connect_errno() .') '.mysqli_connect_error());
			}
			else
			{
				$sql="INSERT INTO logintab (id, username, password) values ( NULL, '$username','$password')";
				if(mysqli_query($conn,$sql))
				{
					echo "account created successfully";
				}
				else
				{
					printf("error: %s\n", mysqli_error($conn));
					
				}
				$conn->close();
			}

		}
		else
		{
		echo "password should not be empty";
		die();
		}

	}
	else
	{
		echo "username should not be empty";
		die();
	}
?>
