<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	
	
		if($fileError === 0) {
			if ($fileSize > -1) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads1/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				echo "ltdbyte.com/uploads1/", $fileNameNew;
			}
		}
	} 
