<?php

use PHPUnit\Framework\TestCase;

class FoobarTest extends TestCase {

	public function test() {
		$foobar = new Foobar();
		$this->assertEquals($foobar->compute(4), 16);
	}
}
