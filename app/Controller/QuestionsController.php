<?php

class QuestionsController extends AppController {

	public function index() {

	}


	public function add(){

		if ($this->request->is('post')){

			//Tenta gravar
			$gravacao = $this->Question->save($this->request->data);

			//Funcionou??
			if ($gravacao) {
				$this->Flash->success('Questão salva com sucesso');
				$this->redirect(['action' => 'index']);
			}
		}
	}



	public function get_by_country($id = null) {
		//$this->loadModel('Grades');
	    $country_id = $this->request->data['Grades']['id'];
	    $this->loadModel('Content');
	    $subcategories = $this->Content->find('list', array(
	        'conditions' => array('Contents.id_grade' => $country_id),
	        'fields' => 'name',
	        'recursive' => -1
	    ));

	    $this->set('cities',$subcategories);
	    $this->layout = 'ajax';
	}
}