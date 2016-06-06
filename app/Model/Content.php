<?php

class Content extends AppModel {
	public $name = 'Content';

	public $belongsTo = array(
		'Grade' => array(
			'className' => 'Grade',
			'foreignKey' => 'grade_id'
		)
	);

	public $validate = [
		'name' => [
			'rule' => 'notBlank',
		],
	];
}