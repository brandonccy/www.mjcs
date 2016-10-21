<?php
$first_name="";
if(isset($_POST["first_name"])&&!empty($_POST["first_name"])){
	$first_name=$_POST["first_name"];
}
$phone="";
if(isset($_POST["phone"])&&!empty($_POST["phone"])){
	$phone=$_POST["phone"];
}
$email="";
if(isset($_POST["email"])&&!empty($_POST["email"])){
	$email=$_POST["email"];
}
$message="";
if(isset($_POST["message"])&&!empty($_POST["message"])){
	$message=$_POST["message"];
}

if($first_name<>""&&$email<>""&&$contact<>""){
	$to = $admin_email;
	$subject = "Incoming inquiry from contact us page";

	$message = "
	<html>
	<head>
	<title>Contact Us Inquiry</title>
	</head>
	<body>
	<p>You have new service request from contact us page.</p>

	<b>Name: </b> ".$first_name."<br>
	<b>Contact: </b> ".$phone."<br>
	<b>Email: </b> ".$email."
	<br><br><b>Message</b><br>
	".$message."<br>

	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <noreply@mjcs.my>' . "\r\n";

	mail($to,$subject,$message,$headers);
	mail("brandon@kkbuddy.com",$subject,$message,$headers);

	$subject="Thanks for sending in inquery.";
	$message='
	<html>
	<head>
	<title>Enquiry Details</title>
	</head>
	<body>
	<p>
	Hi '.$first_name.'<br>
	Thanks for sending us your request.<br>
	We will get back to your very soon.<br>
	</p>
	</body>
	</html>
	';

	mail($email,$subject,$message,$headers);
}
?>
<script>window.location="?done=1";</script>