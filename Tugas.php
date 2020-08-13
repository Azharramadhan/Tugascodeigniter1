<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
Class Tugas extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	public function CV(){
		echo" Nama : Muhammad Azhar Ramadhan<br>";
		echo" TTL : Bandung,07 November 2002<br>";
		echo" Jenis Kelamin : Laki-Laki<br>";
		echo" Alamat: Jl.Taruna Raya No.01 Kec.Ujungberung,Kel.Pasir Endah<br>";
		echo" Email: azharramadhan332@gmail.com<br>";
		echo" Handphone: 088229389416"; 
	}
	public function Prestasi(){
		$this->load->view('view_prestasi');
	}
}