<h3>Disciplinas</h3>

<hr><br>


<table>
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('name', 'Nome');?></th>
		<th>Ação</th>
	</tr>

	<?php foreach ($grades as $grade): ?>
	<tr>
		<td><?php echo $grade['Grade']['id'] ?></td>
		<td><?php echo $grade['Grade']['name'] ?></td>
		<td><?php echo $this->Html->link('Listar Conteúdo', ['action' => 'list_content', $grade['Grade']['id']]); ?>
		| <?php echo $this->Html->link('Cadastrar Conteúdo', ['action' => 'add_content', $grade['Grade']['id']]); ?> 
		| <?php echo $this->Form->postlink('Excluir', ['action' => 'delete', $grade['Grade']['id']], ['confirm' => 'Tem certeza?']); ?></td>
	</tr>
	<?php endforeach; ?>

</table>

<?php echo $this->Html->link('Adicionar Disciplina', ['controller' => 'grades', 'action' => 'add']); ?>