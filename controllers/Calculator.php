<?php
namespace Controllers;

interface Calculator {
	public function calculate(float $a, float $b, float $c): float;
}