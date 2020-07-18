<?php

namespace SunMedia\Tests;

use SunMedia\ExchangeTest;

class User {

	public $gender;
    public $device;
    public $age;

    public function match($user) {
		$this->age = $user->age;
    	$this->gender = $user->gender;
		$this->device = $user->device;

		$exchangeTest = new ExchangeTest();

		return $exchangeTest->test_user($this->age, $this->gender, $this->device);

    }

}

?>