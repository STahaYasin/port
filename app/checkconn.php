<?php

header("Content-type: Application/JSON");
require "result.php";

$res = new Result();
$res->success = true;
$res->message = "Connection success";
$res->data = 512;

die(json_encode($res));

?>