<?php
class baju
{
	public $merk;
	public $ukuran;
	public $warna;

	public function __construct($merk, $ukuran, $warna)
	{
		$this->merk = $merk;
		$this->ukuran = $ukuran;
		$this->warna = $warna;
	}

	public function get_merk()
	{
		return $this->merk;
	}
	public function get_ukuran()
	{
		return $this->ukuran;
	}
	public function get_warna()
	{
		return $this->warna;
}
}
?>