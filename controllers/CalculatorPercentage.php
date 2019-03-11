<?php
namespace Controllers;

interface CalculatorPercentage {
	public function calculate(float $a, float $b): float;
}