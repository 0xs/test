<?php

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase {

	public function testLower() {
		$this->assertEquals(Hello::lower('HeLlO'), 'hello');
	}


	public function testWeirdCharacters() {
		$this->markTestSkipped('Skip weird character test');
		$this->assertEquals(Hello::lower('ÖÄÅ'), 'öäå');
	}

}
