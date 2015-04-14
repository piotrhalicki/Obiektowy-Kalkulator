<!DOCTYPE html>
<html lang="pl-PL">
<meta charset="UTF-8">

<head>
	<meta charset="UTF-8">
	<meta name="Obiektowy_kalkulator" content="ćwiczenia z OOP">	
	<title>< Obiektowy kalkulator ></title>
</head>

<body>

<br>
<div>
<form method="POST" action="#">
<fieldset>
	<legend> < <strong><big>ClassCulator</big></strong> > </legend>
	<p><label>Podaj liczbę (X)<br>
	<input type="text" name="x">
	</label></p>
	<p><label>Podaj liczbę (Y)<br>
	<input type="text" name="y">
	</label></p>

	<button type="submit" name="dodaj">Dodaj</button>
	<button type="submit" name="odejmij">Odejmij</button>
	<button type="submit" name="pomnoz">Pomnóż</button>
	<button type="submit" name="podziel">Podziel</button>
	<button type="submit" name="modulo">Modulo</button>	
	<br><br>
	
</fieldset>
</form>
</div>


<?php
function __autoload($className) {
	$class = $className.".php";
		if (file_exists($class)) {
			//echo ("Ładuję klasę <strong style='color: brown'>$className</strong><br><br>");
			require ("./".$class);
		} else {
			echo ("Brak klasy <strong>$className</strong>.<br>");
		}
}

// include('classCulatorTesty.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['dodaj']) OR 
		isset($_POST['odejmij']) OR 
		isset($_POST['pomnoz']) OR 
		isset($_POST['podziel']) OR 
		isset($_POST['modulo'])) {
		$x = $_POST['x'];
		$y = $_POST['y'];
		$arab = new RomanKonwerter($x, $y);
	}
	
	if(isset($_POST['dodaj'])) {
		$arab->dodawanie();
		echo $arab->dodawanie();
		echo $arab->zaokraglenie();
		echo $arab->zaokraglenieWdol();
		echo $arab->zaokraglenieWgore();
		echo $arab->toRoman();
	}
	
	if(isset($_POST['odejmij'])) {
		$arab->odejmowanie();
		echo $arab->odejmowanie();
		echo $arab->zaokraglenie();
		echo $arab->zaokraglenieWdol();
		echo $arab->zaokraglenieWgore();
		echo $arab->toRoman();
	}
	
	if(isset($_POST['pomnoz'])) {
		$arab->mnozenie();
		echo $arab->mnozenie();
		echo $arab->zaokraglenie();
		echo $arab->zaokraglenieWdol();
		echo $arab->zaokraglenieWgore();
		echo $arab->toRoman();
	}
	
	if(isset($_POST['podziel'])) {
		$arab->dzielenie();
		echo $arab->dzielenie();
		echo $arab->zaokraglenie();
		echo $arab->zaokraglenieWdol();
		echo $arab->zaokraglenieWgore();
		echo $arab->toRoman();
	}
	
	if(isset($_POST['modulo'])) {
		$arab->modulo();
		echo $arab->modulo();
		echo $arab->zaokraglenie();
		echo $arab->zaokraglenieWdol();
		echo $arab->zaokraglenieWgore();
		echo $arab->toRoman();
	}
}

?>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="main.js"></script>

</html>