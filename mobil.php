<?php
class mobil
{
	public $merk;
	public $warna;

	public function __construct($merk, $warna)
	{
		$this->merk = $merk;
		$this->warna = $warna;
	}

	public function get_merk()
	{
		return $this->merk;
	}
	public function get_warna()
	{
		return $this->warna;
}
}
?>