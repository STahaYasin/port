<?php
session_start();
session_destroy();

include "../result.php";

die(json_encode(new Result(true, "ok", null)));
?>