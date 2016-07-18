<?php

class ExamsController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash'];

	

	public function index() {
		$conditions = array();
		$userId = $this->Auth->user('id');

		if ($this->Auth->user('role') != 'admin'){
			$conditions['Exam.user_id'] =  $userId;			
		}

		$this->paginate = ['conditions' => $conditions];

		$lista = $this->paginate();
		$this->set('exams', $lista);	
	}


	//Função para adicionar o id da questão à variável da session
	public function add_question_to_exam($id) {
		//if ($this->request->is('post')) {

			if ($this->Session->read('Exams_select') != null){				
				foreach ($this->Session->read('Exams_select') as $k => $value) {
					$questionsSelected[] = $value;						
				}
				//debug($questionsSelected);
				array_push($questionsSelected, $id);
				$questionsSelected = array_unique($questionsSelected);
				//echo 'Entrou if';
				//debug($questionsSelected);	
				//$this->Session->setFlash(__('Questões adicionadas.',true));
			} else {
				$questionsSelected[] = $id;
				//echo 'Entrou else';
				//debug($questionsSelected);
				//$this->Session->setFlash(__('Questões adicionadas.',true));				
			}

			$this->Session->write('Exams_select', $questionsSelected);	
			//$this->redirect(['controller' => 'questions', 'action' => 'index']);
			$this->redirect($this->referer());				

		//}
		
	}



	//Função para ler se id da questão está adicionado na session
	public function read_selected_item($id) {
		$questionsSelected[] = null;
		
		if (!is_null($this->Session->read('Exams_select'))){				
			foreach ($this->Session->read('Exams_select') as $k => $value) {
				$questionsSelected[] = $value;				
			}			
		} 

		if (in_array($id, $questionsSelected)) {			
			return true;
		} else {
			return false;
		}	
		
	}


	

	//Função para listar as questões que estão na session
	public function view_selected_questions(){
		$this->LoadModel('Question');
		if ($this->Session->read('Exams_select') != null){				
			foreach ($this->Session->read('Exams_select') as $k => $value) {
				$questionsSelected[] = $value;						
			}			
			foreach($questionsSelected as $key => $val){				
				$dados[] = $this->Question->findById($val);
				$this->set('exams',$dados);				
			}
			$this->set('exams',$dados);	
		} else {
			$this->set('exams',null);
			//$this->Flash->error('Nenhuma Questão Selecionada');				
		}
	}




	//Função para remover uma questão da session
	public function remove_selected_item($id = null) {
		$ids[] = $id;
		if ($this->request->is('post')) {

			if ($this->Session->read('Exams_select') != null){				
				foreach ($this->Session->read('Exams_select') as $k => $value) {
					$questionsSelected[] = $value;						
				}
				$questions = array_diff($questionsSelected, $ids);
				$this->Session->write('Exams_select', $questions);
				$this->Flash->success('Questão removida.');
				//$this->redirect(['action' => 'view_selected_questions']);
				//$this->redirect(Controller::referer());
				$this->redirect($this->referer());

			}
		}
	}




	public function generate_exam_teacher(){
		$this->LoadModel('Question');
		$this->layout = 'blank';
		if ($this->Session->read('Exams_select') != null){				
			foreach ($this->Session->read('Exams_select') as $k => $value) {
				$questionsSelected[] = $value;						
			}			
			foreach($questionsSelected as $key => $val){				
				$dados[] = $this->Question->findById($val);
				$this->set('exams',$dados);				
			}
			$this->set('exams',$dados);	
		} else {
			$this->set('exams',null);
		}

	}




	public function generate_exam_student(){
		$this->LoadModel('Question');
		$this->layout = 'blank';
		if ($this->Session->read('Exams_select') != null){				
			foreach ($this->Session->read('Exams_select') as $k => $value) {
				$questionsSelected[] = $value;						
			}			
			foreach($questionsSelected as $key => $val){				
				$dados[] = $this->Question->findById($val);
				$this->set('exams',$dados);				
			}
			$this->set('exams',$dados);	
		} else {
			$this->set('exams',null);
		}
		
	}




	public function save_exam(){
		if ($this->Session->read('Exams_select') != null){				
			foreach ($this->Session->read('Exams_select') as $k => $value) {
				$questionsSelected[] = $value;						
			}	
		} else {
			// $this->set('exams',null);
		}

		if ($this->request->is('post')) {
			$this->Exam->saveAll($this->request->data);
			$this->Flash->success('Prova salva com sucesso');
			$this->redirect(['action' => 'index']);
		} else {
			// $this->set('title', '1');
			// debug($questionsSelected);
		}
	}


	public function load($id = null){
		//IMPLEMENTAR
	}




		//AUTORIZAÇÕES RESTRITAS PARA USUÁRIOS
	public function isAuthorized($user = null) {
		return true;

	    return parent::isAuthorized($user);

	}



}