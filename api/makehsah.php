<?php

if(isset($_GET["password"])){
    $hash = hash("sha512", $_GET["password"]);
    die($hash);
}
else{
    die("no password found!");
}

?>