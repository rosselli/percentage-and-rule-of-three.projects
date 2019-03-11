<?php
namespace Tests;
require('vendor/autoload.php');

use Controllers\Percentage;
use PHPUnit\Framework\TestCase;

class PercentageTest extends TestCase {
	protected function setUp(): void {
		$this->p = new Percentage();
	}

	public function testPercentage() {
		$this->assertEquals(25, number_format($this->p->calculate(0.8, 0.6), 2));
	}

	public function testWhatIsPPercentOfX() {
		$this->assertEquals(2.5, number_format($this->p->whatIsPPercentOfX(0.1, 25), 2));
	}

	public function testYIsWhatPercentOfX() {
		$this->assertEquals(30, number_format($this->p->yIsWhatPercentOfX(12, 40), 2));
	}

	public function testYIsPPercentOfWhat() {
		$this->assertEquals(15, number_format($this->p->yIsPPercentOfWhat(9, 60), 2));
	}

	public function testWhatPercentOfXIsY() {
		$this->assertEquals(22.22, number_format($this->p->whatPercentOfXIsY(27, 6), 2));
	}

	public function testPPercentOfWhatIsY() {
		$this->assertEquals(35, number_format($this->p->PPercentOfWhatIsY(7, 20), 2));
	}

	public function testPPercentOfXIsWhat() {
		$this->assertEquals(1.45, number_format($this->p->pPercentOfXIsWhat(5, 29), 2));
	}

	public function testYOfWhatIsPPercent() {
		$this->assertEquals(33.33, number_format($this->p->yOfWhatIsPPercent(4, 12), 2));
	}

	public function testWhatOfXIsPPercent() {
		$this->assertEquals(2.75, number_format($this->p->whatOfXIsPPercent(11, 25), 2));
	}

	public function testYOfXIsWhatPercent() {
		$this->assertEquals(69.23, number_format($this->p->yOfXIsWhatPercent(9, 13), 2));
	}
}
