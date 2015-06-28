<?php
$to = 'info@memorylight.eu';

$subject = 'Message received from';
if(!is_null($_POST['name'])){
    $subject .= " " . $_POST['name'];
}

$message = '
<html>
<head></head>
<body>';
foreach ($_POST as $key => $value) {
    $message .= "<hr><b>" . $key . ":</b><br>" . $value;
}
$message .= '</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: MemoryLight <info@memorylight.eu> \r\n';
$headers .= 'From: Theo van Sloten <theovansloten@gmail.com>' . "\r\n";

mail($to, $subject, $message, $headers);