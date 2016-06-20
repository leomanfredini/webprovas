<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $belongsTo = [
        'Grade' => [
            'className' => 'grade',
            'foreignKey' => 'grade_id'            
        ]
    ];


	public $validate = [
		'name' => [
			'required' => [
				'rule' => 'notBlank',
				'message' => 'Insira o nome completo do usuário',
			],			
		],
		'username' => [
			'required' => [
				'rule' => 'notBlank',
				'message' => 'Insira um nome de usuário',
			],
			'unique' => [
				'rule' => 'isUnique',
				'message' => 'Este nome de usuário já existe',
				'required' => 'create',
			]
		],
		'password' => [
			'required' => [
				'rule' => 'notBlank',
				'message' => 'Insira uma senha',
			],
		],

		'grade_id' => [
			'required' => [
				'rule' => 'notBlank',
				'message' => 'Selecione uma disciplina',
			],			
		],

		'role' => [
			'valid' => [
				'rule' => ['inlist', ['admin', 'user']],
				'message' => 'Insira um papel válido',
				'allowEmpty' => false,
			],
		],
	];

	public function beforeSave($options=[]) {
		if (isset($this->data[$this->alias]['password'])) {
			$hasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $hasher->hash($this->data[$this->alias]['password']);
		}
		return true;
	}
}