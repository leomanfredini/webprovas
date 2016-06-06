<div class="grades form">
<?php echo $this->Form->create('Grade');?>
	<fieldset>
		<legend>Editar Disciplina</legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', ['label' => 'Nome da Disciplina']);		
	?>
	</fieldset>
<?php echo $this->Form->end('Salvar');?>
</div>
<div class="actions">
	<h3>Ações</h3>
	<ul>
		<li><?php echo $this->Form->postLink('Excluir', ['action' => 'delete', $this->Form->value('Grade.id')], ['confirm' => 'Deseja Realmente Excluir']); ?></li>
		<li><?php echo $this->Html->link('Listar Disciplinas', ['controller' => 'grades', 'action' => 'index']); ?> </li>
		<li><?php echo $this->Html->link('Listar Conteúdos', ['controller' => 'contents', 'action' => 'index']);?></li>
		<li><?php echo $this->Html->link('Adicionar Conteúdo', ['controller' => 'contents', 'action' => 'add']); ?></li>
	</ul>
</div>
