<?php 
//echo $this->Form->button('Gerar PDF', ['controller' => 'exams','action' => 'index']);
//echo $this->Html->link('Gerar PDF', ['controller' => 'exams', 'action' => 'index']); 
?>
<br><br>
<?php 
	$n = 1;
	foreach ($exams as $val => $question): 
?>


	<h3>
		<?php 
			echo $n . ' - ' . $question['Question']['description'];
			$n++;
		?>
	</h3>
	

	<?php
		$l = 'A';
		foreach ($question['Answer'] as $answer) {
			// if ($answer['is_correct'] == 1) {
			// 	echo $this->html->image('test-pass-icon.png') . '&nbsp;&nbsp;';
			// } else {
			// 	echo $this->html->image('test-incorrect-icon.png') . '&nbsp;&nbsp;';
			// }
			
			if ($question['Question']['type'] == 'o'){
				echo '(&nbsp;&nbsp;)&nbsp;&nbsp;<strong>' . $l . '</strong> - ' . $answer['description'] . '<br><br>';
				$l++;
			} else {
				echo '<br><br><br><br><br><br><br><br>';				
				$l++;
			}
			
		}
	?>	
	<br><hr><br>

<?php endforeach ?>

