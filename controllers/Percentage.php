<?php
namespace Controllers;

class Percentage implements CalculatorPercentage {
	public function calculate(float $a, float $b): float {
		return 100 - (($b * 100)/$a);
	}

	public function whatIsPPercentOfX(float $p, float $x): float {
		return $p * $x;
	}

	public function yIsWhatPercentOfX(float $y, float $x): float {
		return ($y/$x) * 100;
	}

	public function yIsPPercentOfWhat(float $y, float $p): float {
		return $y/($p/100);
	}

	public function whatPercentOfXIsY(float $x, float $y): float {
		return ($y/$x)*100;
	}

	public function pPercentOfWhatIsY(float $y, float $p): float {
		return $y/($p/100);
	}

	public function PPercentOfXIsWhat(float $p, float $x): float {
		return ($p/100)*$x;
	}

	public function YOfWhatIsPPercent(float $y, float $p): float {
		return $y/($p/100);
	}

	public function whatOfXIsPPercent(float $p, float $x): float {
		return ($p/100)*$x;
	}

	public function yOfXIsWhatPercent(float $y, float $x): float {
		return ($y/$x)*100;
	}
}