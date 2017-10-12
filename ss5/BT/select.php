<?php 

	$servername = "localhost";
 	$username = "root";
 	$password = "";
  	$database = "login";

	$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"]." - ".$row["name"]." - ".$row["username"]." - ".$row["password"]." - ".$row["avarta"] ."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>