<?php
namespace Controllers;

class ACB implements Calculator {
	public function calculate(float $a, float $b, float $c): float {
		return ($a * $c)/$b;
	}

}