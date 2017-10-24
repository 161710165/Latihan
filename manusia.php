<?php

class manusia {
	var $nama;
	var $tempatlahir;
	var $kelas;
	var $sekolah;
	var $jurusan;

	//kontrack
	public function __construct ($nama,$tempatlahir,$kelas,$sekolah,$jurusan)
	{
		$this->nama = $nama;
		$this->tempatlahir = $tempatlahir;
		$this->kelas = $kelas;
		$this->sekolah = $sekolah;
		$this->jurusan = $jurusan;
	}
	public function get_nama(){
		return $this->nama;
	}
	public function get_tempatlahir(){
		return $this->tempatlahir;
	}
	public function get_kelas(){
		return $this->kelas;
	}
	public function get_sekolah(){
		return $this->sekolah;
	}
	public function get_jurusan(){
		return $this->jurusan;
	}
	
}

?>