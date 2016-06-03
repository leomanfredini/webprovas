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

	public function add($id=null) {
		$this->Content->set(['grade_id' => $id]);			
		$this->Content->save($this->request->data);
		$this->Flash->success('Conteudo Cadastrado');
		$this->redirect(['controller' => 'Grades', 'action' => 'index']);

	}


	public function delete($id){
		if (!$this->request->is('post')){
			throw new MethodNotAllowedException();			
		}
		//Tenta apagar a postagem
		if ($this->Content->delete($id)){
			$this->Flash->success('Conteudo apagado com sucesso.');
			$this->redirect(['controller' => 'Grades', 'action' => 'index']);
		}
	}

}