<?php
class Home extends controller{
	public function index(){
		$this->view('home');
	}
	public function mobile(){
		$this->view('mobile');
	}
}