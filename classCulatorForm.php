<!DOCTYPE html>
<html lang="pl-PL">
<meta charset="UTF-8">

<head>
	<meta charset="UTF-8">
	<meta name="Obiektowy_kalkulator" content="ćwiczenia z OOP">	
	<title>< Obiektowy kalkulator ></title>
</head>

<body>

<div>
<form method="POST" action="#">
<fieldset>
	<legend> < <strong>ClassCulator</strong> > </legend>
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
	
</fieldset>
</form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['dodaj'])) {
		$arab->dodawanie();
		echo $arab->dodawanie();
	}
	
	if(isset($_POST['odejmij'])) {
		$arab->odejmowanie();
		echo $arab->odejmowanie();
	}
	
	if(isset($_POST['pomnoz'])) {
		$arab->mnozenie();
		echo $arab->mnozenie();
	}
	
	if(isset($_POST['podziel'])) {
		$arab->dzielenie();
		echo $arab->dzielenie();
	}
	
	if(isset($_POST['modulo'])) {
		$arab->modulo();
		echo $arab->modulo();
	}
}

/*

dodaj
odejmij
pomnóż
podziel
modulo

*/
?>
</body>
</html>
