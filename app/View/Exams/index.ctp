<div class="exams index">

	<h3>Provas</h3>

	<?php
	echo $this->Form->create('Exams');
	echo $this->Form->input('name', ['label' => 'Nome Completo', ]);
	echo $this->Form->end('Enviar');

	echo $this->Session->read('Name');

	?>

</div>

<div class="actions">
    <?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_exams'); ?>
</div>

