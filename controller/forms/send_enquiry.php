<?php
$first_name="";
if(isset($_POST["first_name"])&&!empty($_POST["first_name"])){
	$first_name=$_POST["first_name"];
}
$contact="";
if(isset($_POST["contact"])&&!empty($_POST["contact"])){
	$contact=$_POST["contact"];
}
$email="";
if(isset($_POST["email"])&&!empty($_POST["email"])){
	$email=$_POST["email"];
}
$date="";
if(isset($_POST["date"])&&!empty($_POST["date"])){
	$date=$_POST["date"];
}
$time="";
if(isset($_POST["time"])&&!empty($_POST["time"])){
	$time=$_POST["time"];
}
$service_area="";
if(isset($_POST["service_area"])&&!empty($_POST["service_area"])){
	$service_area=$_POST["service_area"];
}
$service_state="";
if(isset($_POST["service_state"])&&!empty($_POST["service_state"])){
	$service_state=$_POST["service_state"];
}

$to = $admin_email;
$subject = "Incoming Enquiry from Website";

$message = "
<html>
<head>
<title>Incoming Enquiry</title>
</head>
<body>
<p>You have new service request from website.</p>

<b>Name: </b> ".$first_name."<br>
<b>Contact: </b> ".$contact."<br>
<b>Email: </b> ".$email."
<br><br><b>Service Request Details</b><br>
<b>Date: </b> ".$date."<br>
<b>Time: </b> ".$time."<br>
<b>Place: </b> ".$service_area."<br>
<b>State: </b> ".$service_state."<br>

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

<br><br><b>Your Service Request Details</b><br>
<b>Date: </b> '.$date.'<br>
<b>Time: </b> '.$time.'<br>
<b>Place: </b> '.$service_area.'<br>
<b>State: </b> '.$service_state.'<br>

</body>
</html>
';

mail($email,$subject,$message,$headers);

?>
<script>window.location="?done=1";</script>