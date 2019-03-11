<?php
namespace Tests;
require('vendor/autoload.php');

use Controllers\ACB;
use PHPUnit\Framework\TestCase;

class ACB extends TestCase {
	public function testACB() {
		$two = new ACB();

		$this->assertEquals(0.80, number_format($two->calculate(24, 30, 1), 2));
	}
}
