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

		'password_confirm' => [
			'required' => [
				'rule' => 'notBlank',
				'message' => 'Confirme sua senha',
			],
			'equalFields' => [
				'rule' => ['equalFields', 'password'],
				'message' => 'Senhas não Conferem'
			]
		],

		'grade_id' => [
			'required' => [
				'rule' => 'notBlank',
				'message' => 'Selecione uma disciplina',
			],			
		],

		'password_update' => ['rule' => 'blank',
        'on' => 'create'],		

		'password_confirm_update' => [
			'equalFields' => [
				'rule' => ['equalFields', 'password_update'],
				'message' => 'Senhas não Conferem',
				'requred' => false
			]
					
		],

	];

	public function beforeSave($options=[]) {	

		if (isset($this->data[$this->alias]['password'])) {
			$hasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $hasher->hash($this->data[$this->alias]['password']);
		}

		if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
			$hasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $hasher->hash($this->data[$this->alias]['password_update']);
		}

		return true;
	}

	//Funçao para validar iguardade de dois campos
	public function equalFields($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    } 



    public function isOwnedBy($question, $user) {
        return $this->field('id', array('id' => $question, 'user_id' => $user)) !== false;
    }



}