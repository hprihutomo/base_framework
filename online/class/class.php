<?php 
	/**
	* 
	*/
	class test 
	{
		public $nama;


		function __construct()
		{
			echo "APLIKASI SEDANG DISIAPKAN";
		}

		public function tampil($nama)
		{
			echo "nama saya ".$nama;
		}

		function __destruct()
		{
			echo "Aplikasi dihentikan";
		}
	}
 ?>