<form action="add.php" method="post" enctype="multipart/form-data">
	Name : <input type="text" name="txtname"><br>
	User Name :<input type="text" name="txtusername"><br>
	Password :<input type="password" name="txtpassword"><br>
	Avartar :<input type="file" name="avartar" id="idavarta"><br>
	<input type="submit" name="submit" value="ADD">
</form>

<?php 

	$servername = "localhost";
 	$username = "root";
 	$password = "";
  	$database = "login";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
   	 die("Connection failed: " . mysqli_connect_error());
	}

	if (isset($_POST['submit'])) {

		$fileName = $_FILES['avartar']['name'];
		$userName = $_POST['txtusername'];
		$password = $_POST['txtpassword'];
		$name = $_POST['txtname'];
		if ($fileName != "" && $userName != "" && $password != "" && $name != "") {
			$sql = "INSERT INTO `users`(`name`, `username`, `password`, `avarta`) 
					VALUES ('$name', '$userName', '$password', '$fileName')";

			if (mysqli_query($conn, $sql)) {
   				 echo "New record created successfully";
			} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		}else {
			echo "please enter full data";
		}

	}
?>