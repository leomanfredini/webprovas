<h3>Conteúdos</h3>

<?php echo $this->Html->link('Adicionar Disciplina', ['controller' => 'grades', 'action' => 'add']); ?>
<br>
<?php echo $this->Html->link('Adicionar Conteudo', ['controller' => 'grades', 'action' => 'add_content']); ?>

<br><br><hr><br>
<h4>Conteúdos Cadastrados</h4>
<h3><?php echo $contents[0]['Grade']['name'] ?></h3>
<?php debug($contents) ?>

<table>
	<tr>
		<th><?php echo $this->Paginator->sort('name', 'Disciplina');?></th>
		<th>Conteúdo</th>
		<th>Ação</th>
	</tr>

	<?php foreach ($contents as $content): ?>
	<tr>
		<td><?php echo $content['Grade']['name'] ?></td>
		<td><?php echo $content['Content']['name'] ?></td>		
	</tr>
	<?php endforeach; ?>

</table>