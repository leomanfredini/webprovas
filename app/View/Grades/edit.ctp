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
	<?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_grades'); ?>	
</div>