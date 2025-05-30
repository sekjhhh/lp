<?php
// 301 Redirect Script

// The new URL where the old URL should redirect
$new_url = "https://brilliantskinessentials.ph";

// Send the 301 Moved Permanently status code
header("HTTP/1.1 301 Moved Permanently");

// Redirect to the new URL
header("Location: " . $new_url);

// Ensure the script stops executing after the redirect
exit();
?>
