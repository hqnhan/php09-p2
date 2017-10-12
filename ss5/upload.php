
<?php 

	//$nameFolderImages = 'images/';
	//$nameFolderDocument = 'document/';


	if (isset($_POST['submit'])) {
		// lay kieu file.
		//$fileType = pathinfo($_FILES['avartar']['name'],PATHINFO_EXTENSION);
		//var_dump($fileType);

		$fileName = $_FILES['avartar']['name'];
		var_dump($fileName);
	}
		/*if ($fileType == 'zip' || $fileType == 'doc' || $fileType == 'csv') {
			move_uploaded_file($_FILES['avartar']['tmp_name'],  $nameFolderDocument.$fileName);
		}
		if ($fileType == 'jpg' || $fileType == 'png') {
			move_uploaded_file($_FILES['avartar']['tmp_name'], $nameFolderImages.$fileName);
    	}
    }

    //$_FILES['avartar']['name'];
    //.$_FILES['avartar']['size'];
    //.$_FILES['avartar']['type'];*/

?>



<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="text" name="name" id="name">
		<input type="file" name="avartar" id="idavarta">
		<input type="submit" name="submit" value="upload">
</form>