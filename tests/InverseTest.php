<?php
namespace Tests;
require('vendor/autoload.php');

use Controllers\Inverse;
use PHPUnit\Framework\TestCase;

class InverseTest extends TestCase {
	public function testInverse() {
		$inverse = new Inverse();
		$this->assertEquals(5.33, number_format($inverse->calculate(2, 8, 3), 2));
	}
}
