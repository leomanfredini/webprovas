<?php

class Content extends AppModel {
	public $name = 'Content';

	public $belongsTo = [
		'Grade' => [
			'className' => 'Grade',
			'foreignKey' => 'grade_id'
		]
	];

	public $validate = [
		'name' => [
			'rule' => 'notBlank',
		],
	];




}