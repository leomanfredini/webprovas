<div class="exams index">

	<h3>Provas</h3>

	<?php
	echo $this->Form->create('Exams', ['url' => ['action' => 'read_selected_item']]);
	echo $this->Form->input('id');
	echo $this->Form->end('Enviar');	

	//var_dump(unserialize($this->Session->read('Exams_select')));
	//$exams = array($this->Session->read('Exams_select'));
	//echo $exams[0];
	$e = $this->Session->read('Exams_select');
	var_dump($e);
	?>


	<?php //echo $this->Session->read('Exams_select'); ?>



</div>

<div class="actions">
    <?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_exams'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_users'); ?>
</div>

