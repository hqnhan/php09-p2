<?php
 	$servername = "localhost";
  	$username = "root";
 	 $password = "";
  	$database = "shop_php09";
  	$conn = mysqli_connect($servername, $username, $password,$database);
      // Check connection
 	 if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  	}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "shop_php09";
	$conn = mysqli_connect($servername, $username, $password,$database);
	//indert into db
	$sql = "INSERT INTO users (name, class, age, email)
			VALUES ('Canh', 'PHP', 30, 'hq@gmail.com')";
	if (mysqli_query($conn, $sql)){
		echo "New record created successfully";
	}
	else{
		echo "Erro:".$sql."<br>".mysqli_query($conn);
	}
// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
		echo "Connected successfully";
?>