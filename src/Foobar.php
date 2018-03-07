<?php

class Foobar {

	public function compute($num) {
		return $num * $num;
	}

	public function search($haystack, $needle) {
		return strpos($haystack, $needle) !== FALSE;
	}
}
