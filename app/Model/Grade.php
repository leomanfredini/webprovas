<?php

class Grade extends AppModel {

	//public $hasOne = 'Content';

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