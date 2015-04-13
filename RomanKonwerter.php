<?php
// Subklasa (child class), dziedzicąca po kalkulatorze (parent class)
class RomanKonwerter extends Kalkulator {
	// (metoda zamieniajaca wynik Kalkulatora na liczbę rzymską)
	public function __construct($x, $y) {
		echo ("<hr><strong><em>Odziedziczony konstruktor</em></strong><hr><br>");
		parent::__construct($x, $y);
		echo ("KONSTRUKTOR subklasy mówi: uruchamiam konwerter<br><br>");
	}

	public function toRoman() {
		$romanAndArabicNums = array (
				'M' 	=> 1000,
				'CM' 	=> 900,
				'D' 	=> 500,
				'CD' 	=> 400,
				'C' 	=> 100,
				'XC' 	=> 90,
				'L' 	=> 50,
				'XL' 	=> 40,
				'X' 	=> 10,
				'IX' 	=> 9,
				'V' 	=> 5,
				'IV' 	=> 4,
				'I' 	=> 1,
		);
		$result = "";

		while ($this->wynik > 0){
			foreach ($romanAndArabicNums as $roman => $arab) {
				if ($this->wynik >= $arab){
					$this->wynik -= $arab;
					$result .= $roman;
					break;
				}
			}
		}
		return "Według Rzymian to będzie: ".$result."<br><br>";
	}
}
?>