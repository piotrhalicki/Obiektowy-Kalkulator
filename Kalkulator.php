<!DOCTYPE html>
<html lang="pl-PL">
<meta charset="UTF-8">

<head>
	<meta charset="UTF-8">
	<meta name="Obiektowy_kalkulator" content="ćwiczenia z OOP">	
	<title>						
	< Obiektowy kalkulator >
	</title>
</head>

<body>
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

// Subklasa (child class), dziedzicąca po kalkulatorze (parent class)
class RomanKonwerter extends Kalkulator {
//	(metoda zamieniajaca wynik Kalkulatora na liczbę rzymską)
	public function __construct($x, $y) {
		echo ("<hr><strong><em>Odziedziczony konstruktor</em></strong><br><br>");
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


// Ustawienie zmiennych podawanych następnie jako parametrów do nowej instancji
$liczba1 = "2.5";
$liczba2 = "2";

// stworzenie nowego obiektu (instancji)
$dzialania = new Kalkulator($liczba1, $liczba2);

if (is_a($dzialania, "Kalkulator")){
	echo ("<small><em><strong>Test: </strong>
			obiekt o nazwie 'dzialania' jest instancją klasy o nazwie 'Kalkulator'.</em></small>
			<br>");
} else {
	echo ("<strong>Coś jest nie tak.</strong><br>");
}

if (property_exists($dzialania, "x")){
	echo ("<small><em><strong>Test: </strong>
			obiekt posiada atrybut o nazwie 'x'.</em></small>
			<br>");
} else {
	echo ("<strong>Coś jest nie tak.</strong><br>");	
}

if (property_exists($dzialania, "y")){
	echo ("<small><em><strong>Test: </strong>
			obiekt posiada atrybut o nazwie 'y'.</em></small>
			<br>");
} else {
	echo ("<strong>Coś jest nie tak.</strong><br>");
}

if (method_exists($dzialania, "dodawanie")){
	echo ("<small><em><strong>Test: </strong>
			obiekt posiada metodę 'dodawanie'.</em></small>
			<br>");
} else {
	echo ("<strong>Coś jest nie tak.</strong><br>");
}

if (method_exists($dzialania, "odejmowanie")){
	echo ("<small><em><strong>Test: </strong>
			obiekt posiada metodę 'odejmowanie'.</em></small>
			<br>");
} else {
	echo ("<strong>Coś jest nie tak.</strong><br>");
}

if (method_exists($dzialania, "mnozenie")){
	echo ("<small><em><strong>Test: </strong>
			obiekt posiada metodę 'mnozenie'.</em></small>
			<br>");
} else {
	echo ("<strong>Coś jest nie tak.</strong><br>");
}

if (method_exists($dzialania, "dzielenie")){
	echo ("<small><em><strong>Test: </strong>
			obiekt posiada metodę 'dzielenie'.</em></small>
			<br>");
} else {
	echo ("<strong>Coś jest nie tak.</strong><br>");
}

if (method_exists($dzialania, "modulo")){
	echo ("<small><em><strong>Test: </strong>
			obiekt posiada metodę 'modulo'.</em></small>
			<br><br>");
} else {
	echo ("<strong>Coś jest nie tak.</strong><br>");
}

// wywołanie i wyświetlanie poszczególnych metod
echo $dzialania->dodawanie();
echo $dzialania->zaokraglenie();
echo $dzialania->zaokraglenieWdol();
echo $dzialania->zaokraglenieWgore();

echo $dzialania->odejmowanie();
echo $dzialania->zaokraglenie();
echo $dzialania->zaokraglenieWdol();
echo $dzialania->zaokraglenieWgore();

echo $dzialania->mnozenie();
echo $dzialania->zaokraglenie();
echo $dzialania->zaokraglenieWdol();
echo $dzialania->zaokraglenieWgore();

echo $dzialania->dzielenie();
echo $dzialania->zaokraglenie();
echo $dzialania->zaokraglenieWdol();
echo $dzialania->zaokraglenieWgore();

echo $dzialania->modulo();
echo $dzialania->zaokraglenie();
echo $dzialania->zaokraglenieWdol();
echo $dzialania->zaokraglenieWgore();


// Stworzenie drugiego obiektu klasy RomanKonwerter i wykorzystanie dziedziczonej metody (dodawania)
$liczba3 = "40";
$liczba4 = "50";
$arab = new RomanKonwerter($liczba3, $liczba4);
echo $arab->dodawanie();
echo $arab->toRoman();

?>
</body>

</html>