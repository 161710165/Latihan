<?php
class kerudung
{
	public $merk;
	public $type;
	public $warna;

	public function __construct($merk, $type, $warna)
	{
		$this->merk = $merk;
		$this->type = $type;
		$this->warna = $warna;
	}

	public function get_merk()
	{
		return $this->merk;
	}
	public function get_type()
	{
		return $this->type;
	}
	public function get_warna()
	{
		return $this->warna;
}
}
?>