<?php
	// include("../../lib/DB.php");
	// include("../../lib/conn.inc.php");
	
	// include("../../lib/a.php");
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	$connect = mysql_connect("localhost","wordpress","wordpress");
	if(!$connect){
		die('Could not connect: '. mysql_error());
	}
	mysql_select_db("wordpress") or die(mysql_error());
	
	$sql = "
		INSERT INTO `wp_Page_Contact_Message`
		(`Name`, `E-mail`, `Message`, `sendTime`)
		VALUES
		('{$name}', '{$email}', '{$message}', NOW())
	;";
	$result = mysql_query($sql);
	// if(!$result) die(mysql_error());
	// echo "false";
	
	mysql_close();
	
	if($result){
		$subject = "HyroAsia: Customer ContactForm";
		$emailSend = "nikom2532@NikomS-ThinkPad-R400";
		$emailReceive = "nikom.s@hyroasia.com";
		$headers = "From: ".$emailSend."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n ";
		
		$text = 
"Contact Message
Name: {$name}
E-mail: {$email}
Message: 
{$message}
";
		
		mail($emailReceive, $subject, $text, $headers);
		
		echo "true";
	}
	else{
		echo "false";
	}
	
?>