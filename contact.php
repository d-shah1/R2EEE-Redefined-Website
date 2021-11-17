<?php
require("connection.php");

if (!isset($_REQUEST['name']) && !isset($_REQUEST['phone']) && !isset($_REQUEST['email']) && !isset($_REQUEST['subject'])  && !isset($_REQUEST['message']) ) {
    echo '
    <script language="javascript"> 
    window.location = "contact.html";
    </script>
    ';
}


$name =  $con->real_escape_string($_REQUEST['name']);
$phone = $con->real_escape_string($_REQUEST['phone']);
$email = $con->real_escape_string($_REQUEST['email']);
$subject = $con->real_escape_string($_REQUEST['subject']);
$message = $con->real_escape_string($_REQUEST['message']);


date_default_timezone_set('America/Los_Angeles');
$time = date("j F  Y , g:i:s a", time());

$result = $con->query("INSERT INTO `contact_us`(`name`,`phone`,`email`,`subject`,`message`,`time`) VALUES('$name','$phone', '$email','$subject','$message', '$time')") or die("Failed to insert into Contact Us Table");


if ($result) {
    echo json_encode(array(
        "error" => "false", "comment" => "Your Response has been submitted successfully."
    ));
} else {
    echo json_encode(array(
        "error" => "true", "comment" => "Something went wrong please try again later."
    ));
}
