<?php

class Exam extends AppModel {

    public $belongsTo = [        
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id'            
        ]
    ];

    public $validate = [
		'title' => [
			'rule' => 'notBlank',
		],
	];


}