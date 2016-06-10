<?php



class Answer extends AppModel {

	public $actsAs = array('Containable');


	public $hasOne = [
        'Question' => [
            'className' => 'question',
            'foreignKey' => 'question_id'            
        ]
    ];
	

}