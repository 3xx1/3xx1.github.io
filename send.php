<?php
$message = "Name:\n" . $_POST["name"] . "\n\nMessage:\n" . $_POST["message"];
if (!mb_send_mail("chgm@uw.edu", $_POST["subject"], $message, "From: " . $_POST["mail"])) {
  exit("error");
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>msg form</title>
</head>
<body>
<p>Your message has been sent. Thank you. </p>
</body>
</html>