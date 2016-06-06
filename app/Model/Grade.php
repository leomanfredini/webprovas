<?php

class Grade extends AppModel {

	public $hasMany = array (
      'Content' => array (
            'className' => 'Content',
            'foreignKey' => 'grade_id'
         )
   );

	public $validate = [
		'name' => [
			'rule' => 'notBlank',
		],
	];


}