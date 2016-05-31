<h3>Disciplinas</h3>

<?php echo $this->Html->link('Adicionar Disciplina', ['controller' => 'grades', 'action' => 'add']); ?>
<br>
<?php echo $this->Html->link('Adicionar Conteudo', ['controller' => 'grades', 'action' => 'add_content']); ?>

<br><br><hr><br>
<h4>Disciplinas Cadastradas</h4>

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
		<td><?php echo $this->Form->postlink('Excluir', ['action' => 'delete', $grade['Grade']['id']], ['confirm' => 'Tem certeza?']); ?></td>
	</tr>
	<?php endforeach; ?>

</table>