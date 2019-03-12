<?php
namespace Tests;
require('vendor/autoload.php');

use Controllers\ACB;
use PHPUnit\Framework\TestCase;

class ACBTest extends TestCase {
	public function testACB() {
		$acb = new ACB();
		$this->assertEquals(0.80, number_format($acb->calculate(24, 30, 1), 2));
	}
}
