<?php


class Question extends AppModel {
	// public $hasMany = array(
 //        'Answer' => array(
 //            'className' => 'Answer',
 //            'foreignKey' => 'question_id'            
 //        )
 //    );

    public $validate = [
		'descricao' => [
			'rule' => 'notBlank',
		],
		'disciplina' => [
			'rule' => 'notBlank',
		],
	];

}