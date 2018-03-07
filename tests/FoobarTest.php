<?php

use PHPUnit\Framework\TestCase;

class FoobarTest extends TestCase {

	protected $foobar;

	public function setUp() {
		$this->foobar = new Foobar();
	}

	public function testCompute() {
		$this->assertEquals($this->foobar->compute(4), 16);
	}

	public function testSearch() {
		$this->assertTrue($this->foobar->search('Hello World!', 'or'));
	}
}
