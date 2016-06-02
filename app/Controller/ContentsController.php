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
		

		// $this->Content->grade_id = $id;
		// //Verifica se é get (primeiro acesso)
		// if ($this->request->is('get')){
		// 	$this->request->data = $this->Content->findById($id);
		// } else {
		// 		$this->Content->set(array(
		// 			'grade_id' => $id));			
		// 		$this->Content->save($this->request->data);
		// 		$this->Flash->success('Conteudo Cadastrado');
		// 		$this->redirect(['controller' => 'Grades', 'action' => 'index']);								

		// }

	}

}