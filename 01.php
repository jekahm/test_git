<?php
  
class Test {
	public $arr = array();
	
	public function out($arr = array()) {
		$this->prints($arr);
	}
	
	public function prints($arr = array()) {
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
}

$test = new Test();
$test->arr[] = "1";
ob_start();
//ob_implicit_flush(false);
$test->out($test->arr);
$a = ob_get_clean();
$test->arr[] = "2";
echo $a;

?>