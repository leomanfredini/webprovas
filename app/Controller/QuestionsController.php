<?php

class QuestionsController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash', 'Js', 'Text'];


	public function index() {
		// $this->Question->recursive = 0;
		// $lista = $this->paginate();
		// $this->set('questions', $lista);

		$conditions = array();
		//Transform POST into GET
		if(($this->request->is('post') || $this->request->is('put')) && isset($this->data['Question'])){
			$filter_url['controller'] = $this->request->params['controller'];
			$filter_url['action'] = $this->request->params['action'];
			// We need to overwrite the page every time we change the parameters
			$filter_url['page'] = 1;

			// for each filter we will add a GET parameter for the generated url
			foreach($this->data['Question'] as $name => $value){
				if($value){
					// You might want to sanitize the $value here
					// or even do a urlencode to be sure
					$filter_url[$name] = urlencode($value);
				}
			}	
			// now that we have generated an url with GET parameters, 
			// we'll redirect to that page
			return $this->redirect($filter_url);
		} else {
			// Inspect all the named parameters to apply the filters
			foreach($this->params['named'] as $param_name => $value){
				// Don't apply the default named parameters used for pagination
				if(!in_array($param_name, array('page','sort','direction','limit'))){
					// You may use a switch here to make special filters
					// like "between dates", "greater than", etc
					if($param_name == "search"){
						$conditions['OR'] = array(
							array('Question.description LIKE' => '%' . $value . '%'),
    						array('Question.description LIKE' => '%' . $value . '%')
						);
					} else {
						$conditions['Question.'.$param_name] = $value;
					}					
					$this->request->data['Filter'][$param_name] = $value;
				}
			}
		}
		$this->Question->recursive = 0;
		$this->paginate = array(
			'limit' => 10,
			'conditions' => $conditions
		);
		$this->set('questions', $this->paginate());

		// get the possible values for the filters and 
		// pass them to the view
		$grades = $this->Question->Grade->find('list', ['order' => 'Grade.name ASC']);
		$this->set(compact('grades'));
		$contents = $this->Question->Content->find('list');
		$this->set(compact('contents'));

		// Pass the search parameter to highlight the text
		$this->set('search', isset($this->params['named']['search']) ? $this->params['named']['search'] : "");

		
	}


	public function view($id = null){

		//$this->LoadModel('Answer');
		//$this->request->data = $this->Question->read(null, $id);
		//$this->Question->findAllById($id);
		$this->request->data = $this->Question->read(null, $id);
		$dados = $this->Question->findById($id);
		$this->set('question',$dados);
		if (!$this->Question->exists()) {
			throw new NotFoundException('Questão Inexistente');
		}		
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
				$this->Flash->success('Questão alterada com sucesso.');
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
				$this->Flash->success('Questão alterada com sucesso.');
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
			$this->Flash->success('Questão excluída com sucesso.');
			$this->redirect(['action' => 'index']);
		}
	}

}