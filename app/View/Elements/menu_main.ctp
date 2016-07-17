<li><strong><?php echo AuthComponent::user('name'); //echo $this->Session->read('User_name'); ?></strong></li>
<li><?php 
    	if ($this->Session->check('User_id')) {
            echo $this->Html->link('Editar Perfil', ['controller' => 'users', 'action' => 'editUser', AuthComponent::user('id')]);
            echo '  ';
		  echo $this->Html->link('Sair', ['controller' => 'users', 'action' => 'logout']);	
		  echo '<br><br><br><hr>';	  
		}
     ?>
    </li>  

<h3>Menu Principal</h3>
<ul>
    <li><?php echo $this->Html->link('Provas', ['controller' => 'exams', 'action' => 'index']); ?></li>
    <li><?php echo $this->Html->link('Questões', ['controller' => 'questions', 'action' => 'index']); ?></li>
    <li><?php 
        if (AuthComponent::user('role') == 'admin'){
            echo $this->Html->link('Disciplinas', ['controller' => 'grades', 'action' => 'index']);
        }
        ?>
    </li>
    <li><?php echo $this->Html->link('Conteúdos', ['controller' => 'contents', 'action' => 'index']); ?></li>
    <li><?php 
        if (AuthComponent::user('role') == 'admin'){
            echo $this->Html->link('Usuários', ['controller' => 'users', 'action' => 'index']);
        }
        ?>
    </li>
    <li><?php //echo $this->Html->link('Usuários', ['controller' => 'users', 'action' => 'index']); ?></li>
</ul>
