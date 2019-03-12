<?php
namespace Tests;
require('vendor/autoload.php');

use Controllers\BCA;
use PHPUnit\Framework\TestCase;

class BCATest extends TestCase {
	public function testBCA() {
		$bca = new BCA();
		$this->assertEquals(8.57, number_format($bca->calculate(7, 3, 20), 2));
	}
}
