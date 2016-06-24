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


	<!-- <br><br><br><hr><br>	
	<h1>A raposa vermelha ataca o cão preguiçoso</h1>
	<h2>A raposa vermelha ataca o cão preguiçoso</h2>
	<h3>A raposa vermelha ataca o cão preguiçoso</h3>
	<h4>A raposa vermelha ataca o cão preguiçoso</h4>
	<h5>A raposa vermelha ataca o cão preguiçoso</h5>
	<h6>A raposa vermelha ataca o cão preguiçoso</h6> -->

</div>

<div class="actions">
    <?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_questions'); ?>
</div>