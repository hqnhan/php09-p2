<?php
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
	echo $_POST['name']."<br>";
	echo $_POST['class']."<br>";
	echo $_POST['birtday']."<br>";
	echo $_POST['email']."<br>";
?>