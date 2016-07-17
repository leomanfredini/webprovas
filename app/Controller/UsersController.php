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


	public function editUser($id = null){

		if (!$id) {
            $this->Flash->error('Informe um Id de Usuário');
            $this->redirect(['controller'=>'pages', 'action'=>'index']);
        }

        $user = $this->User->findById($id);
        if (!$user) {
            $this->Flash->error('Ação Inválida');
            $this->redirect(['controller'=>'pages', 'action'=>'index']);
        }

         if ($id != $this->Auth->user('id')) {
            $this->Flash->error('Ação Inválida');
            $this->redirect(['controller'=>'pages', 'action'=>'index']);
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->id = $id;
            if ($this->User->save($this->request->data)) {
                $this->Flash->success('Dados Atualizados com Sucesso');
                $this->redirect(array('action' => 'editUser', $id));
            }else{
                $this->Flash->error('Não foi Possível Atualizar os Dados');
            }
        }

        if (!$this->request->data) {
            $this->request->data = $user;
        }

		$grades = $this->User->Grade->find('list', ['order' => 'Grade.name ASC']);
		$this->set(compact('grades'));

	}




	public function editUserAdmin($id = null){

		if (!$id) {
            $this->Flash->error('Informe um Id de Usuário');
            $this->redirect(['controller'=>'pages', 'action'=>'index']);
        }

        $user = $this->User->findById($id);
        if (!$user) {
            $this->Flash->error('Ação Inválida');
            $this->redirect(['controller'=>'pages', 'action'=>'index']);
        }


        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->id = $id;
            if ($this->User->save($this->request->data)) {
                $this->Flash->success('Dados de Usuário Atualizados com Sucesso');
                $this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error('Não foi Possível Atualizar os Dados');
            }
        }

        if (!$this->request->data) {
            $this->request->data = $user;
        }

		$grades = $this->User->Grade->find('list', ['order' => 'Grade.name ASC']);
		$this->set(compact('grades'));

	}




	public function login(){
		if ($this->request->is('post')) {
			if ($this->Auth->login()){
				$this->Session->write('User_id', $this->Auth->user('id'));
				$this->Session->write('User_name', $this->Auth->user('name'));
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('Nome de Usuario ou senha invalidos');
		}
		if ($this->Auth->user('id')){
			$this->redirect(['controller' => 'pages', 'action' => 'start']);
		}		
	}

	public function logout(){
		if ($this->Session->valid()) {
		  $this->Session->destroy(); // Destrói		  
		}
		return $this->redirect($this->Auth->logout());
	}



	//AUTORIZAÇÕES RESTRITAS PARA USUÁRIOS
	public function isAuthorized($user = null) {

	    if (in_array($this->action, array('editUser'))) {
	        return true;
	    }

	    // if (in_array($this->action, array('editUser'))) {
	    //     $userId = (int) $this->request->params['pass'][0];
	    //     if ($this->User->isOwnedBy($userId, $user['id'])) {
	    //         return true;
	    //     }
	    // }

	    return parent::isAuthorized($user);

	}

	

}	