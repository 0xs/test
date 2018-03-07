<?php

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase {

	public function testLower() {
		$this->assertEquals(Hello::lower('HeLlO'), 'hello');
	}

}
