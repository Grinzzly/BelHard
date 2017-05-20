<?php

require_once "vendor/autoload.php";

class Between implements Iterator {
	private $from;
	private $to;
	private $i;

	public function __construct($from, $to) {
		$array = range($from, $to);
	}

	public function rewind() {

	}

	public function current() {
		return $this->array[$this->i];
	}

	public function key() {
		$this->$i;
	}

	public function next() {
		$this->$i++;
	}

	public function valid() {
	}

}

$it = new Between (1,10);

foreach($it as $key => $value) {
    echo $key.' square is '.$value.'<br>';
}