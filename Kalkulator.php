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
		//echo 	("<strong style='color: green'>KONSTRUKTOR </strong>mówi: Przyjąłem liczbę <strong style='color: red'>X</strong> równą:
				//<strong>$this->x</strong>
				//oraz liczbę <strong style='color: red'>Y</strong> równą:
				//<strong>$this->y</strong>.
				//<br><br>");
	}

	// Destruktor (metoda "magiczna" ;)
	public function __destruct() {
		//echo 	("<strong style='color: green'>DESTRUKTOR </strong>mówi: Koniec działań ;)<br>");
	}

	// Dodawanie (metoda)
	public function dodawanie() {
		$suma = ($this->x) + ($this->y);
		$this->wynik = $suma;
		return 	("<br><form><fieldset><legend>
				<strong>< WYNIK ></strong></legend><br>
				<strong style='color: blue'>DODAWANIE: </strong>
				<strong>$this->x</strong>
				plus
				<strong>$this->y</strong>
				równa się:
				<strong>$suma</strong>.<br><br>
				<button type='submit' class='m1'>Zaokrąglij</button>
				<button type='submit' class='m2'>Zaokrąglij w dół</button>
				<button type='submit' class='m3'>Zaokrąglij w górę</button>
				<button type='submit' class='m4'>Konwertuj na rzymskie</button><br>
				<br></fieldset></form>");
	}

	// Odejmowanie (metoda)
	public function odejmowanie() {
		$roznica = ($this->x) - ($this->y);
		$this->wynik = $roznica;
		return 	("<br><form><fieldset><legend>
				<strong>< WYNIK ></strong></legend><br>
				<strong style='color: blue'>ODEJMOWANIE: </strong>
				<strong>$this->x</strong>
				minus
				<strong>$this->y</strong>
				równa się:
				<strong>$roznica</strong>.<br><br>
				<button type='submit' class='m1'>Zaokrąglij</button>
				<button type='submit' class='m2'>Zaokrąglij w dół</button>
				<button type='submit' class='m3'>Zaokrąglij w górę</button>
				<button type='submit' class='m4'>Konwertuj na rzymskie</button><br>
				<br></fieldset></form>");
	}
	// Mnożenie (metoda)
	public function mnozenie() {
		$iloczyn = ($this->x) * ($this->y);
		$this->wynik = $iloczyn;
		return 	("<br><form><fieldset><legend>
				<strong>< WYNIK ></strong></legend><br>
				<strong style='color: blue'>MNOŻENIE: </strong>
				<strong>$this->x</strong>
				razy
				<strong>$this->y</strong>
				równa się:
				<strong>$iloczyn</strong>.<br><br>
				<button type='submit' class='m1'>Zaokrąglij</button>
				<button type='submit' class='m2'>Zaokrąglij w dół</button>
				<button type='submit' class='m3'>Zaokrąglij w górę</button>
				<button type='submit' class='m4'>Konwertuj na rzymskie</button><br>
				<br></fieldset></form>");
	}

	// Dzielenie (metoda)
	public function dzielenie() {
		$iloraz = ($this->x) / ($this->y);
		$this->wynik = $iloraz;
		return 	("<br><form><fieldset><legend>
				<strong>< WYNIK ></strong></legend><br>
				<strong style='color: blue'>DZIELENIE: </strong>
				<strong>$this->x</strong>
				dzielone przez
				<strong>$this->y</strong>
				równa się:
				<strong>$iloraz</strong>.<br><br>
				<button type='submit' class='m1'>Zaokrąglij</button>
				<button type='submit' class='m2'>Zaokrąglij w dół</button>
				<button type='submit' class='m3'>Zaokrąglij w górę</button>
				<button type='submit' class='m4'>Konwertuj na rzymskie</button><br>
				<br></fieldset></form>");
	}

	// Modulo (metoda)
	public function modulo() {
		$modulo = ($this->x) % ($this->y);
		$this->wynik = $modulo;
		return 	("<br><form><fieldset><legend>
				<strong>< WYNIK ></strong></legend><br>
				<strong style='color: blue'>MODULO: </strong>
				<strong>$this->x</strong>
				modulo
				<strong>$this->y</strong>
				równa się:
				<strong>$modulo</strong>.<br><br>
				<button type='submit' class='m1'>Zaokrąglij</button>
				<button type='submit' class='m2'>Zaokrąglij w dół</button>
				<button type='submit' class='m3'>Zaokrąglij w górę</button>
				<button type='submit' class='m4'>Konwertuj na rzymskie</button><br>
				<br></fieldset></form>");
	}

	// Zaokrąglenie (metoda)
	public function zaokraglenie() {
		if (is_float($this->wynik) == TRUE) {
			$zaokraglenie = round($this->wynik);
			return ("<br><form hidden class='z1'><fieldset>
					<legend>< <strong>ZAOKRĄGLENIE</strong> ></legend>
					<em>Wynik po zaokrągleniu:
					<strong>$zaokraglenie</strong></em>.
					<br></fieldset></form>");
		} else {
			return ("<br><form hidden class='z11'><fieldset>
					<legend>< <strong>ZAOKRĄGLENIE</strong> ></legend>
					<em>Wynik po zaokrągleniu:
					Nie ma co zaokrąglać, wynik jest wystarczająco okrągły ;)</em>
					<br></fieldset></form>");
		}
	}

	// Zaokrąglenie w dół (metoda)
	public function zaokraglenieWdol() {
		if (is_float($this->wynik) == TRUE) {
			$zaokraglenieWdol = floor($this->wynik);
			return ("<br><form hidden class='z2'><fieldset>
					<legend>< <strong>ZAOKRĄGLENIE W DÓŁ</strong> ></legend>
					<em>Wynik po zaokrągleniu w dół:
					<strong>$zaokraglenieWdol</strong></em>.
					<br></fieldset></form>");
		} else {
			return ("<br><form hidden class='z22'><fieldset>
					<legend>< <strong>ZAOKRĄGLENIE W DÓŁ</strong> ></legend>
					<em>Wynik po zaokrągleniu w dół:
					Nie ma co zaokrąglać, wynik jest wystarczająco okrągły ;)</em>
					<br></fieldset></form>");
		}

	}

	// Zaokrąglenie w górę (metoda)
	public function zaokraglenieWgore() {
		if (is_float($this->wynik) == TRUE) {
			$zaokraglenieWgore = ceil($this->wynik);
			return ("<br><form hidden class='z3'><fieldset>
					<legend>< <strong>ZAOKRĄGLENIE W GÓRĘ</strong> ></legend>
					<em>Wynik po zaokrągleniu w górę:
					<strong>$zaokraglenieWgore</strong></em>.
					<br></fieldset></form>");
		} else {
			return ("<br><form hidden class='z33'><fieldset>
					<legend>< <strong>ZAOKRĄGLENIE W GÓRĘ</strong> ></legend>
					<em>Wynik po zaokrągleniu w górę:
					Nie ma co zaokrąglać, wynik jest wystarczająco okrągły ;)</em>
					<br></fieldset></form>");
		}
	}
}
?>