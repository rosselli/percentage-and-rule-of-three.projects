<?php
namespace Controllers;

class Inverse implements Calculator {
	public function calculate(float $a, float $b, float $c): float {
		return ($a * $b)/$c;
	}
}