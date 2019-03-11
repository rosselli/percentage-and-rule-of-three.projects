<?php
namespace Controllers;

class BCA implements Calculator {
	public function calculate(float $a, float $b, float $c): float {
		return ($b * $c)/$a;
	}
}