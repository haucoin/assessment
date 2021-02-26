<?php

namespace App\Models;

class Data {
	
	// Define variables for the data object
	private $input1;
	private $input2;
	private $input3;
	private $input4;
	

	/**
	 * Non-default constrcutor to initialize a data object
	 * 
	 * @param $input1 - String: The first variable input of the form for the data object
	 * @param $input2 - String: The second variable input of the form for the data object
	 * @param $input3 - String: The third variable input of the form for the data object
	 * @param $input4 - String: The fourth variable input of the form for the data object
	 */
	function __construct($input1, $input2, $input3, $input4) {
		$this->input1 = $input1;
		$this->input2 = $input2;
		$this->input3 = $input3;
		$this->input4 = $input4;
	}
	
	
	/**
	 * Getters and setters
	 */
	public function getInput1() {
		return $this->input1;
	}
	
	public function setInput1($input1) {
		$this->input1 = $input1;
	}
	
	public function getInput2() {
		return $this->input2;
	}
	
	public function setInput2($input2) {
		$this->input2 = $input2;
	}
	
	public function getInput3() {
		return $this->input3;
	}
	
	public function setInput3($input3) {
		$this->input3 = $input3;
	}
	
	public function getInput4() {
		return $this->input4;
	}
	
	public function setInput4($input4) {
		$this->input4 = $input4;
	}
	
}

