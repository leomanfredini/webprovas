<?php

class ContentsController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash'];

	public function index() {
		// $this->Content->recursive = 0;
		// $lista = $this->paginate();
		// $this->set('contents', $lista);
		$grades = $this->Content->Grade->find('list');
		$this->set(compact('grades'));
	}

}