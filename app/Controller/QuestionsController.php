<?php

class QuestionsController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash', 'Js', 'Text'];


	public function index() {
		$this->Question->recursive = 0;
		$lista = $this->paginate();
		$this->set('questions', $lista);

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


	public function delete($id){
		if (!$this->request->is('post')){
			throw new MethodNotAllowedException();			
		}
		//Tenta apagar a postagem
		if ($this->Question->delete($id)){
			$this->Flash->success('Questão apagada com sucesso.');
			$this->redirect(['action' => 'index']);
		}
	}


	public function edit($id = null) {
		// $this->Grade->id = $id;
		// if (!$this->Grade->exists()) {
		// 	throw new NotFoundException('Disciplina Inválida');
		// }
		// if ($this->request->is('post') || $this->request->is('put')) {
		// 	if ($this->Grade->save($this->request->data)) {
		// 		$this->Flash->success('Conteúdo alterado com sucesso.');
		// 		$this->redirect(['action' => 'index']);
		// 	} else {
		// 		$this->Flash->error('ERRO!! A disciplina não pôde ser alterada!!!');
		// 	}
		// } else {
		// 	$this->request->data = $this->Grade->read(null, $id);
		// }
	}




}