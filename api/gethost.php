<?php

include "../result.php";

$visitorIP = $_SERVER['REMOTE_ADDR'];

die(json_encode(new Result(true, "ip", $visitorIP)));

?>