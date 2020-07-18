<?php

namespace SunMedia\Tests;

use SunMedia\ExchangeTest;

class Campaign {

	public function campaigns() {

		$exchangeTest = new ExchangeTest();

		return $exchangeTest->campaignsAll();

	}

}

?>