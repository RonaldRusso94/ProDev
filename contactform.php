<?php 

	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];


		$mailTo = "ProgressiveDevelopment@yahoo.com";
		$headers = "From: ".$mailFrom;
		$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;


		mail($mailTo, $subject, $txt, $headers);
		header("Location: index.php?mailsend");
	}

 ?>