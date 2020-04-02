<?php

$back_reference = htmlspecialchars($_SERVER["PHP_SELF"]);
$isSecure = false;
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $isSecure = true;
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
    $isSecure = true;
}
$REQUEST_PROTOCOL = $isSecure ? 'https' : 'http';
//echo $REQUEST_PROTOCOL;

if( $REQUEST_PROTOCOL === 'http' ){
	header("Location: https://www.algorithms.altervista.org". $back_reference,TRUE,301 );
    exit;
}

?>