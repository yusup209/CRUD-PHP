<?php 
	//melakukan include file dompdf
	require_once 'assets/dompdf-master/lib/html5lib/parser.php';
	require_once 'assets/dompdf-master/lib/php-font-lib/src/FontLib/Autoloader.php';
	require_once 'assets/dompdf-master/lib/php-svg-lib/src/autoload.php';

	require_once 'assets/dompdf-master/src/autoloader.php';
	Dompdf\Autoloader::register();

	//mendefinisikan lokasi zona waktu dunia di Jakarta alias GMT 7
	date_default_timezone_set("Asia/Jakarta");

	//fungsi untuk mengambil data dari parameter $_GET, apabila tidak ada maka yang dikembalikan adalah null
	function get($val){
		return isset($_GET[$val])?htmlspecialchars($_GET[$val]):null;
	}


	//fungsi untuk mengambil data dari paramter $_POST,apabila tidak ada maka yang dikembalikan adalah null
	function post($val){
		//htmlspecialchars($val) digunakan untuk mengubah string html ke karakter spesial agar terhindar dari sQl Injection
		return isset($_POST[$val])?htmlspecialchars($_POST[$val]):null;
	}


	//fungsi untuk melakukan 'include' file php dengan $Koneksi yang dibuat global agar bisa diakses koneksi databasenya, apabila file tidak ada maka akan melakukan include terhadap file nofil.php
	function inc($val){
		global $koneksi;
		include file_exists($val.'.php')?$val.'.php':'nofile.php';
	}
?>