<div class="questions view">	

	<h3><?php echo $question['Question']['id'] . ' - ' . $question['Question']['description'];?></h3>

	<?php
	$l = 'A';
	foreach ($question['Answer'] as $answer) {
		if ($answer['is_correct'] == 1) {
			echo $this->html->image('test-pass-icon.png') . '&nbsp;&nbsp;';
		} else {
			echo $this->html->image('test-incorrect-icon.png') . '&nbsp;&nbsp;';
		}
		echo '<strong>' . $l . '</strong> - ' . $answer['description'] . '<br><br>';
		$l++;
	}
	?>	
	
	<br>
	<h5><?php echo 'Questão cadastrada por: ' . $question['User']['name'];?></h5>
	<br><hr><br>

	<a href="javascript:window.history.back()">Voltar</a>

</div>



<div class="actions">
    <?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_questions'); ?>
</div>