<h3>Menu Usuários</h3>
<ul>
    <li><?php echo $this->Html->link('Novo Usuário', ['controller' => 'users', 'action' => 'addUser']); ?></li>
    <li><?php 
    	if ($this->Session->check('User_id')) {
		  echo $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']);		  
		}
     ?>
    </li>
    <li><?php 
    	if (!$this->Session->check('User_id')) {
		  echo $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']);		  
		}
     ?>
    </li>
    <li><?php echo $this->Session->read('User_name'); ?></li>
    
</ul> 