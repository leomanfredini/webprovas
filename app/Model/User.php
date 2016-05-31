<?php


App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');


class User extends AppModel {
	public $validate = [
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
		'role' => [
			'valid' => [
				'rule' => ['inlist', ['admin', 'author']],
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