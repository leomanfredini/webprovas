<h3>Menu Usuários</h3>


<ul>
	<li><?php 
        if (AuthComponent::user('role') == 'admin'){
            echo $this->Html->link('Listar Usuários', ['controller' => 'users', 'action' => 'index']);
        }
        ?>
    </li>
    <li><?php //echo $this->Html->link('Listar Usuários', ['controller' => 'users', 'action' => 'index']); ?></li>
    <li><?php echo $this->Html->link('Novo Usuário', ['controller' => 'users', 'action' => 'addUser']); ?></li>
    
</ul> 