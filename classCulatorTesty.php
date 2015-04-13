<?php
// Ustawienie zmiennych podawanych następnie jako parametrów do nowej instancji
$liczba1 = "2.5";
$liczba2 = "2";

// stworzenie nowego obiektu (instancji)
$dzialania = new Kalkulator ($liczba1, $liczba2);

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
echo $arab->mnozenie();
echo $arab->toRoman();
?>