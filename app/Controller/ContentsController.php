<?php

class ContentsController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash'];



	public function index() {
		$this->Content->recursive = 0;
		$this->set('contents', $this->paginate());
	}

	


	public function add() {
		if ($this->request->is('post')) {
			$this->Content->create();
			if ($this->Content->save($this->request->data)) {
				$this->Flash->success('Conteudo Cadastrado');
				$this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('ERRO!! O conteúdo não pôde ser cadastrado');
			}
		}
		$grades = $this->Content->Grade->find('list');
		$this->set(compact('grades'));
	}



	public function delete($id){
		if (!$this->request->is('post')){
			throw new MethodNotAllowedException();			
		}
		//Tenta apagar a postagem
		if ($this->Content->delete($id)){
			$this->Flash->success('Conteúdo excluído com sucesso.');
			$this->redirect(['action' => 'index']);
		}
	}



	public function edit($id = null) {
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(('Conteúdo Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Content->save($this->request->data)) {
				$this->Flash->success('Conteúdo alterado com sucesso.');
				$this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('ERRO!! Conteúdo não pôde ser alterado');
			}
		} else {
			$this->request->data = $this->Content->read(null, $id);
		}
		$grades = $this->Content->Grade->find('list');
		$this->set(compact('grades'));
	}

}