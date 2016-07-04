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
			if ($answer['is_correct'] == 1) {
				if ($question['Question']['type'] == 'o'){
					echo $this->html->image('test-pass-icon.png') . '&nbsp;&nbsp;(X)&nbsp;&nbsp;';
				}
			} else {
				echo $this->html->image('test-incorrect-icon.png') . '&nbsp;&nbsp;(&nbsp;&nbsp;)&nbsp;&nbsp;';
			}
			
			if ($question['Question']['type'] == 'o'){
				echo '<strong>' . $l . '</strong> - ' . $answer['description'] . '<br><br>';
				$l++;
			} else {
				echo $answer['description'] . '<br><br>';
				$l++;
			}
			
			
		}
	?>	
	<br><hr><br>

<?php endforeach ?>