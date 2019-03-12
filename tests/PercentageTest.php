<?php
namespace Tests;
require('vendor/autoload.php');

use Controllers\Percentage;
use PHPUnit\Framework\TestCase;

class PercentageTest extends TestCase {
	protected function setUp(): void {
		$this->p = new Percentage();
	}

//	public function testPercentage() {
//		$this->assertEquals(25, number_format($this->p->calculate(0.8, 0.6), 2));
//	}
//
	public function testFindPercent() {
		$this->assertEquals(1.45, number_format($this->p->findPercent(5, 29), 2));
		$this->assertEquals(2.5, number_format($this->p->findPercent(10, 25), 2));
		$this->assertEquals(2.75, number_format($this->p->findPercent(11, 25), 2));
	}

	public function testFindPercentage() {
		$this->assertEquals(30, number_format($this->p->findPercentage(12, 40), 2));
		$this->assertEquals(69.23, number_format($this->p->findPercentage(9, 13), 2));
		$this->assertEquals(22.22, number_format($this->p->findPercentage(6, 27), 2));
	}

	public function testFindTotal() {
		$this->assertEquals(15, number_format($this->p->findTotal(9, 60), 2));
		$this->assertEquals(33.33, number_format($this->p->findTotal(4, 12), 2));
		$this->assertEquals(35, number_format($this->p->findTotal(7, 20), 2));
	}
}
