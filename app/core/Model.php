<?php
class Model{
	public function __construct(){
		$this->library(array('DB'));
	}
	public function library($libs = array()){
		foreach ($libs as $l) {
			require_once 'app/libs/'.$l.'.php';
			$this->l = new $l();
		}
	}
}