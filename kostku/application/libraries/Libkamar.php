<?php 

class Libkamar{
	function format($angka){
		$format_angka = number_format($angka,1,".",".");
		return $format_angka;
	}
}