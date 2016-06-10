<?php

class QuestionsController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash', 'Js'];


	public function index() {
		// $grades = $this->Content->Grade->find('list');
		// $this->set(compact('grades'));

	}

	public function add() {
		
	}

	public function add_o(){
		$this->LoadModel('Answer');
		//$this->Question->contain('Answer');

		if ($this->request->is('post')){

			//Tenta gravar
			$gravacao = $this->Question->saveAll($this->request->data);

			//Funcionou??
			if ($gravacao) {
				$this->Flash->success('Questão salva com sucesso');
				$this->redirect(['action' => 'index']);
			}
		}
		$grades = $this->Question->Grade->find('list', ['order' => 'Grade.name ASC']);
		$this->set(compact('grades'));
		$contents = $this->Question->Content->find('list');
		$this->set(compact('contents'));
	}


	public function add_d() {
	    $this->LoadModel('Answer');
		//$this->Question->contain('Answer');

		if ($this->request->is('post')){

			//Tenta gravar
			$gravacao = $this->Question->saveAll($this->request->data);

			//Funcionou??
			if ($gravacao) {
				$this->Flash->success('Questão salva com sucesso');
				$this->redirect(['action' => 'index']);
			}
		}
		$grades = $this->Question->Grade->find('list', ['order' => 'Grade.name ASC']);
		$this->set(compact('grades'));
		$contents = $this->Question->Content->find('list');
		$this->set(compact('contents'));
	}



}