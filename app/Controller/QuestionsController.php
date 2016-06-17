<?php

class QuestionsController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash', 'Js', 'Text'];


	public function index() {
		$this->Question->recursive = 0;
		$lista = $this->paginate();
		$this->set('questions', $lista);

	}


	public function view($id = null){
		//$this->request->data = $this->Question->read(null, $id);
		//$this->Question->findAllById($id);
		$dados = $this->Question->findById($id);
		$this->set('question',$dados);
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




	public function edit($id = null) {		
		$this->Question->id = $id;
		//$this->Question->read($id);
		if ($this->Question->field('type') == 'o') {
			$this->redirect(['action' => 'edit_o', $id]);			
		} else if ($this->Question->field('type') == 'd') {
			$this->redirect(['action' => 'edit_d', $id]);
		} else {
			throw new MethodNotAllowedException();
		}
	}



	public function edit_o($id = null) {
		$this->LoadModel('Answer');
		$this->Question->id = $id;
		if (!$this->Question->exists()) {
			throw new NotFoundException('Questão Inválida');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Question->saveAll($this->request->data)) {
				$this->Flash->success('Conteúdo alterado com sucesso.');
				$this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('ERRO!! A questão não pôde ser alterada!!!');
			}
		} else {
			$this->request->data = $this->Question->read(null, $id);
		}
		$grades = $this->Question->Grade->find('list', ['order' => 'Grade.name ASC']);
		$this->set(compact('grades'));
		$contents = $this->Question->Content->find('list');
		$this->set(compact('contents'));	
		//$this->render('edit_o');	
	}


	public function edit_d($id = null) {
		$this->LoadModel('Answer');
		$this->Question->id = $id;
		if (!$this->Question->exists()) {
			throw new NotFoundException('Questão Inválida');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Question->saveAll($this->request->data)) {
				$this->Flash->success('Conteúdo alterado com sucesso.');
				$this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('ERRO!! A questão não pôde ser alterada!!!');
			}
		} else {
			$this->request->data = $this->Question->read(null, $id);
		}
		$grades = $this->Question->Grade->find('list', ['order' => 'Grade.name ASC']);
		$this->set(compact('grades'));
		$contents = $this->Question->Content->find('list');
		$this->set(compact('contents'));	
		//$this->render('edit_o');	
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

}