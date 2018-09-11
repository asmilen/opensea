<?php

namespace App\Models;
class TicketInfo
{
	const NORMAL = 'normal';
	const FAMILY = 'family';

	public $id;
	public $name;
	public $image;
	public $popular;
	public $type;
	public $feature;
	public $exclusive_offer;
	public $prices;
	public $currency;
	
	public function __construct() {
		$currency = 'VND';
	}
}
