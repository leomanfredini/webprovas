<div class="users form">

<h3>Usuários</h3>

<table>
	<tr>
		
		<th>Nome</th>
		<th>Usuário</th>
		<th>Disciplina</th>
		<th>Permissão</th>
		<th>Ações</th>
	</tr>
	<?php
		foreach ($users as $user):
	?>
	<tr>
		<!-- <td><?php //echo $user['User']['id'];?></td> -->
		<td><?php echo $user['User']['name'];?></td>
		<td><?php echo $user['User']['username'];?></td>
		<td><?php echo $user['Grade']['name'];?></td>
		<td><?php echo $user['User']['role'];?></td>
		<td class="actions">
				<?php echo $this->Html->link('Editar', ['action' => 'editUserAdmin', $user['User']['id']]); ?> 
				<?php //echo echo $this->Html->link('Excluir', ['action' => 'delete', $user['User']['id']], ['confirm' => 'Tem certeza que deseja excluir definitivamente este usuário?']); ?>
			</td>
	</tr>
	<?php endforeach; ?>
</table>
</div>

<div class="actions">
	<?php
		if ($this->Session->valid()){
			echo $this->element('menu_main');
			echo '<br><hr><br>';
    		echo $this->element('menu_users');	
		}
	?>
        
</div>
