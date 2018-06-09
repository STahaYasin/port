<?php

class Result{
    public $success;
    public $message;
    public $data;

    public function __construct($s, $m, $d){
        $this->success = $s;
        $this->message = $m;
        $this->data = $d;
    }
}
?>
