<?php

if(!$spoj=@mySQL_connect("localhost", "root", ""))  //spoj ma mysql server
{
	die("<b>Došlo do pogreške</b>");
}

if(!mySQL_select_db("gejmeri", $spoj))     // odabir baze na serveru
{
	die("<b>Odabrana je pogrešna baza podataka</b>");
}

?>