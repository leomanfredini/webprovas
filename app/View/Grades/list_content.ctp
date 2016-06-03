
<h3><?php echo $contents[0]['Grade']['name'] ?></h3>
<?php debug($contents) ?>

<table>
	<tr>
		<th>Conteúdos Cadastrados</th>
		<th>Ação</th>
	</tr>

	<?php foreach ($contents as $content): ?>
	<tr>		
		<td><?php echo $content['Content']['name'] ?></td>	
		<td><?php echo $this->Form->postlink('Excluir', ['controller' => 'contents', 'action' => 'delete', $content['Content']['id']], ['confirm' => 'Tem certeza?']); ?></td>	
	</tr>
	<?php endforeach; ?>

</table>

<?php echo $this->Html->link('Adicionar Conteudo', ['controller' => 'grades', 'action' => 'add_content', $contents[0]['Grade']['id']]); ?>