<?php
namespace Controllers;

class Percentage {
	public function findPercent(float $p, float $x): float {
		return ($p/100)*$x;
	}

	public function findPercentage(float $y, float $x): float {
		return ($y/$x)*100;
	}

	public function findTotal(float $y, float $p): float {
		return $y/($p/100);
	}
}