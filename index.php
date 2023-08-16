<?php

// Get the requested URL
$requestUrl = $_SERVER['REQUEST_URI'];
$router = trim(str_replace("/mysite"," ",$requestUrl));
if($router == "/"){
    include("home.php");
}else{
    echo "page not found";
}
?>