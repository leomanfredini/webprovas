<?php

class GradesController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash'];

	public function index() {
		$this->Grade->recursive = 0;
		$lista = $this->paginate();
		$this->set('grades', $lista);
		//debug($this->Grade->find('all'));	
		//debug($lista);	
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

	public function list_content($id=null) {
		$this->loadModel('Content');
		//$lista = $this->Content->find('all');
		$lista = $this->Content->findAllByGrade_id($id);
		//$lista = $this->paginate();
		$this->set('contents', $lista);
		//$content = $this->Grade->read(null, $id); //assuming $id contains a movie id...
		//debug($lista);
	}

	public function add_content($id=null) {
		$this->Grade->id = $id;
		//Verifica se é get (primeiro acesso)
		if ($this->request->is('get')){
			$this->request->data = $this->Grade->findById($id);
		} else {
			$grades = $this->Grade->find('list');
			$this->set('grades', $grades);	
		}

		

	}
}