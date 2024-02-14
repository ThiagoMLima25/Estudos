<?php
	/*
		método date trás os valores do servidor
		d - Dia
		m - Mês
		Y - Ano

		H - Hora
		i - Minuto
		s - Segundo

		Timestamp é quantidade de segundos desde 01 de janeiro de 1970.
	*/
	echo date("d/m/Y H:i:s");
echo "<br><br>";
	echo time();
echo "<br><br>";
	echo date("d/m/Y H:i:s", 1551017325);
echo "<br><br>";

// echo $timestamp = strtotime("2001-09-11");
echo $timestamp = strtotime("now");
echo "<br>";
echo date("l, d/m/Y", $timestamp);
echo "<br><br>";
echo $timestamp = strtotime("+1 day");
echo "<br>";
echo date("l, d/m/Y", $timestamp);
echo "<br><br>";
echo $timestamp = strtotime("+1 week");
echo "<br>";
echo date("l, d/m/Y", $timestamp);
?>