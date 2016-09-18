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

$to = "brandon@kkbuddy.com";
$subject = "Incoming Enquiry from Website";

$message = "
<html>
<head>
<title>Incoming Enquiry</title>
</head>
<body>
<p>You have new service request from website.</p>
<table width='100%'>
<tr>
<th>Name</th>
<th>Contact</th>
<th>Email</th>
<th>Request Date</th>
<th>Request Time</th>
<th>Place</th>
<th>State</th>
</tr>
<tr>
<td style='text-align:center;'>".$first_name."</td>
<td style='text-align:center;'>".$contact."</td>
<td style='text-align:center;'>".$email."</td>
<td style='text-align:center;'>".$date."</td>
<td style='text-align:center;'>".$time."</td>
<td style='text-align:center;'>".$service_area."</td>
<td style='text-align:center;'>".$service_state."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@mjcs.my>' . "\r\n";

mail($to,$subject,$message,$headers);

?>
<script>window.location="?done=1";</script>