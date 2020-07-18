<?php

namespace SunMedia\Tests;

class Exchange {

	public $campaign;
	public $campaignsHighArr = [];
	public $campaignsLowArr = [];

	public $userGender;
	public $userDevice;

	public function addCampaign($campaign) {
		$this->$campaign = $campaign->priority;

		if($this->campaign == "High") {

			$this->campaignsHighArr[$campaign->id] = array(
				'id' => $campaign->id,
				'gender' => 'Female',
				'priority' => 'High',
				'device' => 'Mobile',
				'ageSegment' => '11:56',
			);

		}

		if($this->campaign == "Low") {

			$this->campaignsLowArr[$campaign->id] = array(
				'id' => $campaign->id,
				'gender' => 'Male',
				'priority' => 'Low',
				'device' => 'Mobile',
				'ageSegment' => '11:56',
			);

		}

	}

	public function campaigns() {
		if($this->campaign == "High") {
			return $this->campaignsHighArr;
		}

		if($this->campaign == "Low") {
			return $this->campaignsLowArr;
		}
	}

	public function removeCampaign($campaign) {

		$this->$campaign = $campaign->priority;

		if($this->campaign == "High") {
			unset($this->campaignsHighArr[$campaign->id]);
		}

		if($this->campaign == "Low") {
			unset($this->campaignsLowArr[$campaign->id]);
		}

	}

	public function getCampaignById($id) {

		$this->$campaign = $campaign->priority;

		if($this->campaign == "High") {
			return $this->campaignsHighArr[$campaign->id];
		}

		if($this->campaign == "Low") {
			return $this->campaignsLowArr[$campaign->id];
		}

	}

	public function match($user) {
		$this->userGender = $user->gender;
		$this->userDevice = $user->device;

		$campaignsMatch = [];

		for ($i = 0; $i < count($campaignsHighArr); $i++) {

			if($campaignsHighArr[$i]['gender'] == $this->userGender || $campaignsHighArr[$i]['device'] == $this->userDevice) {
				$campaignsMatch[] = $campaignsHighArr[$i];
			}

		}

		for ($i = 0; $i < count($campaignsLowArr); $i++) {

			if($campaignsLowArr[$i]['gender'] == $this->userGender || $campaignsLowArr[$i]['device'] == $this->userDevice) {
				$campaignsMatch[] = $campaignsLowArr[$i];
			}

		}

		return $campaignsMatch;

	}

	public function campaignsAll() {
		return array_merge($this->campaignsHighArr, $this->campaignsLowArr);
	}

}

?>