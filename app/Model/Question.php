<?php


class Question extends AppModel {
	public $belongsTo = [
        'Grade' => [
            'className' => 'Grade',
            'foreignKey' => 'grade_id'            
        ],
        'Content' => [
            'className' => 'Content',
            'foreignKey' => 'content_id'            
        ],
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id'            
        ]
    ];

    public $hasMany = [
        'Answer' => [
            'classname' => 'Answer'
        ]
    ];

 
    public $validate = [
		'grade_id' => [
			'rule' => 'notBlank',			
		],
		'content_id' => [
			'rule' => 'notBlank',
		],
		'description' => [
			'rule' => 'notBlank',
		],
	];

}