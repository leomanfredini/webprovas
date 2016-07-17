
<table style="float: left;">
<tbody>
<tr>
<td>&nbsp;</td>
<td style="text-align: center;">
	<?php echo $this->html->image('logo.png'); ?>
	<br>
	<strong>PROFESSOR: </strong><?php echo AuthComponent::user('name'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>DATA:&nbsp;___/___/______</strong>
	<br><br>
	<h2><strong><span style="color: #ff0000;">GABARITO DO PROFESSOR</span></strong></h2>	
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>


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
			if ($answer['is_correct'] == 1) {
				if ($question['Question']['type'] == 'o'){
					echo $this->html->image('test-pass-icon.png') . '&nbsp;&nbsp;(X)&nbsp;&nbsp;';
				}
			} else {
				echo $this->html->image('test-incorrect-icon.png') . '&nbsp;&nbsp;(&nbsp;&nbsp;)&nbsp;&nbsp;';
			}
			
			if ($question['Question']['type'] == 'o'){
				echo '<strong>' . $l . '</strong>.&nbsp;&nbsp;' . $answer['description'] . '<br><br>';
				$l++;
			} else {
				echo nl2br(h($answer['description'])) . '<br><br>';
				$l++;
			}
			
			
		}
	?>	
	<br><hr><br>

<?php endforeach ?>