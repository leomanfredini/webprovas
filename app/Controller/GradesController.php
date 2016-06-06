<?php

class GradesController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash'];

	public function index() {
		$this->Grade->recursive = 0;
		$lista = $this->paginate();
		$this->set('grades', $lista);
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Grade->create();
			if ($this->Grade->save($this->request->data)) {
				$this->Flash->success('Disciplina Cadastrada com Sucesso');
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('Não foi possível cadastrar a disciplina');
		}
	}


	public function delete($id){
		if (!$this->request->is('post')){
			throw new MethodNotAllowedException();			
		}
		//Tenta apagar a postagem
		if ($this->Grade->delete($id)){
			$this->Flash->success('Disciplina apagada com sucesso.');
			$this->redirect(['action' => 'index']);
		}
	}


	public function edit($id = null) {
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException('Disciplina Inválida');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grade->save($this->request->data)) {
				$this->Flash->success('Conteúdo alterado com sucesso.');
				$this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('ERRO!! A disciplina não pôde ser alterada!!!');
			}
		} else {
			$this->request->data = $this->Grade->read(null, $id);
		}
	}


}