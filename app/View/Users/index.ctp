<div class="users form">

<h3>Usuários</h3>

<table>
	<tr>
		
		<th>Nome</th>
		<th>Usuário</th>
		<th>Disciplina</th>
		<th>Permissão</th>
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
