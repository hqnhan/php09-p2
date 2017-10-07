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

  /*
  *
  */
  //$name = $_POST["name"];
	$nameErr = $classErr = $birtdayErr = $emailErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		if (empty($_POST["name"])) {
    		$nameErr = "Name is required";
  		} else {
    		  $name = test_input($_POST["name"]); 
  		}
  		if (empty($_POST["class"])) {
    		$classErr = "Class is required";
  		} else {
    		$class = test_input($_POST["class"]);
  		}
  		if (empty($_POST["email"])) {
   			$emailErr = "Email is required";
  		} else {
    		$email = test_input($_POST["email"]);
   			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			$emailErr = "Invalid email format"; 
    		}
  		}
  		if (empty($_POST["birtday"])) {
   			$birtdayErr = "BirtDay is required";
  		} else {
    		$birtday = test_input($_POST["birtday"]);
   			if ($birtday < 18) {
      			$birtdayErr = "Age is not valid"; 
    		}
  		}
  	}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form action="ep3.php" name="FormRegistration" method="post">
	Name   :	 	<input type="text" name="name">
	<span class="error">*<?php echo $nameErr;?></span><br>
	Class  :	 	<input type="text" name="class">
	<span class="error">*<?php echo $classErr;?></span><br>
	BirtDay: 	<input type="text" name="birtday">
	<span class="error">*<?php echo $birtdayErr;?></span><br>
	Email  :		<input type="text" name="email">
	<span class="error">*<?php echo $emailErr;?></span>
	<br><input type="submit" name="submit" value="Registration">
	
</form>
<?php

	$name1 = (isset($_POST['name']) ? $_POST['name'] : '');
	$class1 = (isset($_POST['class']) ? $_POST['class'] : '');
	$birtday1 = (isset($_POST['birtday']) ? $_POST['birtday'] : '');
	$email1 = (isset($_POST['email']) ? $_POST['email'] : '');
  echo $name1."<br>";
  echo $class1."<br>";
  echo $birtday1."<br>";
  echo $email1."<br>";


  $sql = "INSERT INTO users (name, class, age, email)
      VALUES ('$name1', '$class1', $birtday1, '$email1') ";

  

  if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
  }
  else{
    echo "Erro:".$sql."<br>".mysqli_query($conn,$sql);
  }




  $mysql = "SELECT * FROM users";
  $result = $conn->query($mysql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " ."class:". $row["class"]. " " ."age:".$row["age"]. " " ."email:".$row["email"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>