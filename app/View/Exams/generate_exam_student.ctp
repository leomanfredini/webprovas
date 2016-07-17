
<table style="float: left;">
<tbody>
<tr>
<td>&nbsp;</td>
<td style="text-align: center;">
	<?php echo $this->html->image('logo.png'); ?>
	<br>
	<strong>PROFESSOR: <?php echo AuthComponent::user('name'); ?></strong>
	<br><br>
	<strong>ALUNO:&nbsp;________________________________________________&nbsp;&nbsp;&nbsp;&nbsp;DATA:&nbsp;___/___/______</strong>
	<br><br>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>


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
			echo '<strong>' . $n . '.</strong> ' . nl2br(h($question['Question']['description']));
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
				echo '(&nbsp;&nbsp;)&nbsp;&nbsp;<strong>' . $l . '</strong>.&nbsp;&nbsp;' . $answer['description'] . '<br><br>';
				$l++;
			} else {
				echo '<br><br><br><br><br><br><br><br>';				
				$l++;
			}
			
		}
	?>	
	<br><hr><br>

<?php endforeach ?>

