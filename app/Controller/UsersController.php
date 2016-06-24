<?php

class UsersController extends AppController {

	

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('addUser', 'logout');
	}

	public function index() {
		$this->User->recursive = 0;
		$lista = $this->paginate();
		$this->set('users', $lista);		
	}

	public function view($id = null) {
		$this->User->id = $id;
		if(!$this->user->exists()) {
			throw new Exception('Usuario Invalido');
		}
		$this->set('user', $this->User->findById($id));
	}


	public function addUser(){
		//verifica existência de post (para gravar no banco)
		if ($this->request->is('post')) {
			$this->User->create();
			if($this->User->save($this->request->data)){
				$this->Flash->success('Usuario criado com sucesso');
				return $this->redirect(['action' => 'login']);
			}
			$this->Flash->error('Não foi possível criar o usuario');
		}
		$grades = $this->User->Grade->find('list', ['order' => 'Grade.name ASC']);
		$this->set(compact('grades'));

	}

	public function login(){
		if ($this->request->is('post')) {
			if ($this->Auth->login()){
				$this->Session->write('Name', 'Leo');
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('Nome de Usuario ou senha invalidos');
		}		
	}

	public function logout(){
		if ($this->Session->valid()) {
		  $this->Session->destroy(); // Destrói		  
		}
		return $this->redirect($this->Auth->logout());
	}

	

}	