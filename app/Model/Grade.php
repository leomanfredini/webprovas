<?php

class Grade extends AppModel {

	// public $hasMany = [
 //      'Content' => [
 //            'className' => 'Content',
 //            'foreignKey' => 'grade_id'
 //         ]
 //   ];

	public $validate = [
		'name' => [
			'rule' => 'notBlank',
		],
	];


}