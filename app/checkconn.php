<?php

header("Content-type: Application/JSON");
require "result.php";

$res = new Result();
$res->success = true;
$res->message = "Connection success";
$res->data = $_POST["test"];

die(json_encode($res));

?>