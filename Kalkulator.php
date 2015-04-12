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
		$zaokraglenie = round($this->wynik);
		return ("<small><em>Wynik po zaokrągleniu <strong>$zaokraglenie</strong></em>.</small><br>");
	}

// Zaokrąglenie w dół (metoda)
	public function zaokraglenieWdol() {
		$zaokraglenieWdol = floor($this->wynik);
		return ("<small><em>Wynik po zaokrągleniu w dół <strong>$zaokraglenieWdol</strong></em>.</small><br>");
	}

// Zaokrąglenie w górę (metoda)
	public function zaokraglenieWgore() {
		$zaokraglenieWgore = ceil($this->wynik);
		return ("<small><em>Wynik po zaokrągleniu w górę <strong>$zaokraglenieWgore</strong></em>.</small><br><br>");
	}
}

/*
// Subklasa (child class), dziedzicąca po kalkulatorze (parent class)
class RomanKonwerter extends Kalkulator {
		(metoda zamieniajaca wynik Kalkulatora na liczbę rzymską - soon...)
}
*/

// Ustawienie zmiennych podawanych następnie jako parametrów do nowej instancji
$liczba1 = "1543.2";
$liczba2 = "112.3";

// stworzenie nowego obiektu (instancji)
$dzialania = new Kalkulator($liczba1, $liczba2);

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
?>
</body>

</html>