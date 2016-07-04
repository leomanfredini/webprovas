<div class="grades form">
	<fieldset>
		<legend>Adicionar Discipina</legend>
		<?php
			echo $this->Form->create('Grade');
			echo $this->Form->input('name', ['label' => 'Nome da Disciplina']);			
			echo $this->Form->end('Salvar');
		?>	
	</fieldset>
</div>

<div class="actions">
	<?php echo $this->element('menu_main'); ?>
    <br><hr><br>
	<h3>Menu Disciplinas</h3>
	<ul>
		<li><?php echo $this->Html->link('Listar Disciplinas', ['action' => 'index']);?></li>
		<li><?php echo $this->Html->link('Listar Conteúdos', ['controller' => 'contents', 'action' => 'index']); ?> </li>
		<li><?php echo $this->Html->link('Adicionar Conteúdo', ['controller' => 'contents', 'action' => 'add']); ?> </li>
	</ul>
</div>