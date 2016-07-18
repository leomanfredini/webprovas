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
    <?php echo $this->element('menu_grades'); ?>	
</div>