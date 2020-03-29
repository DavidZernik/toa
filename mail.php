<?php
$to = "meikanusa@gmail.com";
$subject = "Contact from Tax Opportunities of America";

$message = "
<html>
<head>
<title>Contact from Tax Opportunities of America</title>
</head>
<body>
<p>Contact Details</p>
<table>
<tr>
<th>Name</th>
<td>".$_POST['demo-name']."</td>
</tr>
<tr>
<th>Email</th>
<td>".$_POST['demo-email']."</td>
</tr>
<tr>
<th>Phone Number</th>
<td>".$_POST['demo-phone']."</td>
</tr>
<tr>
<th>Message</th>
<td>".$_POST['demo-message']."</td>
</tr>

</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$_POST['demo-email'].'' . "\r\n";


mail($to,$subject,$message,$headers);

header('Location:index.html#contact');
die();