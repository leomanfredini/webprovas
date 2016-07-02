<?php

class ExamsController extends AppController {

	public $helpers = ['Html', 'Form', 'Flash'];

	

	public function index() {
		
		if ($this->request->is('post')) {

			if ($this->Session->read('Exams_select') != null){				
				foreach ($this->Session->read('Exams_select') as $k => $value) {
					$questionsSelected[] = $value;						
				}
				debug($questionsSelected);
				array_push($questionsSelected, $this->request->data['Exams']['num']);
				echo 'Entrou if';
				debug($questionsSelected);	
			} else {
				$questionsSelected[] = $this->request->data['Exams']['num'];
				echo 'Entrou else';
				debug($questionsSelected);				
			}

			$this->Session->write('Exams_select', $questionsSelected);					

		}

		//REMOVE ITENS
		//$_SESSION[cart]=array_diff($_SESSION[cart],$prod_id)
		
	}


	public function add_question_to_exam($id) {
		//if ($this->request->is('post')) {

			if ($this->Session->read('Exams_select') != null){				
				foreach ($this->Session->read('Exams_select') as $k => $value) {
					$questionsSelected[] = $value;						
				}
				debug($questionsSelected);
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
			$this->redirect(['controller' => 'questions', 'action' => 'index']);				

		//}
		
	}


	public function read_selected_item($id) {
		$questionsSelected[] = null;
		
		if (!is_null($this->Session->read('Exams_select'))){				
			foreach ($this->Session->read('Exams_select') as $k => $value) {
				$questionsSelected[] = $value;				
			}			
		} 

		// echo '<br>Result = ' . $result . '<br><br>';
		// if (isset($result)) {
		// 	echo '<p>Key = ' . $result;				
		// 	$this->set('exames', true);
		// 	echo 'existe';
		// } else {
		// 	$this->set('exames', false);
		// 	echo 'nao existe';
		// }		


		if (in_array($id, $questionsSelected)) {
			//$this->set('exames', true);
			//echo 'existe';
			return true;
		} else {
			//$this->set('exames', false);
			//echo 'nao existe';
			return false;
		}	
		
	}


	public function delete($id){
		// if (!$this->request->is('post')){
		// 	throw new MethodNotAllowedException();			
		// }
		
		// if ($this->Grade->delete($id)){
		// 	$this->Flash->success('Disciplina apagada com sucesso.');
		// 	$this->redirect(['action' => 'index']);
		// }

		// //SQL para apagar respostas sem questões associadas
		// //DELETE FROM `answers` WHERE question_id NOT IN (select id from questions)
		// //SELECT * FROM `answers` WHERE question_id NOT IN (select id from questions)
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