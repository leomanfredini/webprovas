<?php

class Grade extends AppModel {

	//public $hasOne = 'Content';

	public $validate = [
		'name' => [
			'rule' => 'notBlank',
		],
	];


}