<?php
// Klasa
class Kalkulator {

	// Atrybuty
	public $x;
	public $y;

	// Konstruktor (metoda "magiczna" ;)
	public function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
		echo 	("<strong style='color: green'>KONSTRUKTOR </strong>mówi: Przyjąłem liczbę <strong style='color: red'>X</strong> równą:
				<strong>$this->x</strong>
				oraz liczbę <strong style='color: red'>Y</strong> równą:
				<strong>$this->y</strong>.
				<br><br>");
	}

	// Destruktor (metoda "magiczna" ;)
	public function __destruct() {
		echo 	("<strong style='color: green'>DESTRUKTOR </strong>mówi: Koniec działań ;)<br>");
	}

	// Dodawanie (metoda)
	public function dodawanie() {
		$suma = ($this->x) + ($this->y);
		$this->wynik = $suma;
		return 	("<strong style='color: blue'>DODAWANIE: </strong><strong>$this->x</strong>
				plus
				<strong>$this->y</strong>
				równa się:
				<strong>$suma</strong>.
				<br>");
	}

	// Odejmowanie (metoda)
	public function odejmowanie() {
		$roznica = ($this->x) - ($this->y);
		$this->wynik = $roznica;
		return 	("<strong style='color: blue'>ODEJMOWANIE: </strong><strong>$this->x</strong>
				minus
				<strong>$this->y</strong>
				równa się:
				<strong>$roznica</strong>.
				<br>");
	}
	// Mnożenie (metoda)
	public function mnozenie() {
		$iloczyn = ($this->x) * ($this->y);
		$this->wynik = $iloczyn;
		return 	("<strong style='color: blue'>MNOŻENIE: </strong><strong>$this->x</strong>
				razy
				<strong>$this->y</strong>
				równa się:
				<strong>$iloczyn</strong>.
				<br>");
	}

	// Dzielenie (metoda)
	public function dzielenie() {
		$iloraz = ($this->x) / ($this->y);
		$this->wynik = $iloraz;
		return 	("<strong style='color: blue'>DZIELENIE: </strong><strong>$this->x</strong>
				dzielone przez
				<strong>$this->y</strong>
				równa się:
				<strong>$iloraz</strong>.
				<br>");
	}

	// Modulo (metoda)
	public function modulo() {
		$modulo = ($this->x) % ($this->y);
		$this->wynik = $modulo;
		return 	("<strong style='color: blue'>MODULO: </strong><strong>$this->x</strong>
				modulo
				<strong>$this->y</strong>
				równa się:
				<strong>$modulo</strong>.
				<br>");
	}

	// Zaokrąglenie (metoda)
	public function zaokraglenie() {
		if (is_float($this->wynik)) {
			$zaokraglenie = round($this->wynik);
			return ("<small><em><u>Wynik po zaokrągleniu:</u>
					<strong>$zaokraglenie</strong></em>.</small>
					<br>");
		} else {
			return ("<small><em><u>Wynik po zaokrągleniu:</u>
					Nie ma co zaokrąglać, wynik jest wystarczająco okrągły ;)</em></small>
					<br>");
		}
	}

	// Zaokrąglenie w dół (metoda)
	public function zaokraglenieWdol() {
		if (is_float($this->wynik)) {
			$zaokraglenieWdol = floor($this->wynik);
			return ("<small><em><u>Wynik po zaokrągleniu w dół:</u>
					<strong>$zaokraglenieWdol</strong></em>.</small>
					<br>");
		} else {
			return ("<small><em><u>Wynik po zaokrągleniu w dół:</u>
					Nie ma co zaokrąglać, wynik jest wystarczająco okrągły ;)</em></small>
					<br>");
		}

	}

	// Zaokrąglenie w górę (metoda)
	public function zaokraglenieWgore() {
		if (is_float($this->wynik)) {
			$zaokraglenieWgore = ceil($this->wynik);
			return ("<small><em><u>Wynik po zaokrągleniu w górę:</u>
					<strong>$zaokraglenieWgore</strong></em>.</small>
					<br><br>");
		} else {
			return ("<small><em><u>Wynik po zaokrągleniu w górę:</u>
					Nie ma co zaokrąglać, wynik jest wystarczająco okrągły ;)</em></small>
					<br><br>");
		}
	}
}
?>