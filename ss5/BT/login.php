<form action="login.php" method="post">
	<h1>login</h1>
	User Name :<input type="text" name="txtusername" id="txtlogin"><br>
	Password:<input type="password" name="txtpassword" id="txtpassword"><br>
	<input type="submit" name="submit" value="Login">
</form>
<?php 
	session_start();

	$username = $_POST["txtusername"];
	$password = $_POST["txtpassword"];

	if (isset($_POST['submit'])) {
		if ($username == "hqnhan.34" && $password == "123456") {
			$SESSION["login"] = $username;
			echo "wellcome admin ".$SESSION['login'];
		} else {
			echo "Login failed";
		}
	}

?>