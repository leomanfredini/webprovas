<div class="index">
<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td>001</td>
			<td>002</td>
			<td>003</td>
		</tr>
		<tr>
			<td>001</td>
			<td>002</td>
			<td>003</td>
		</tr>		
	</table>
</div>


<div class="actions">
	<?php 
		if ($this->Session->check('Name')) {
				  echo $this->element('menu_main');		  
		} 
		echo $this->element('menu_users');		
	?>
    <br><hr><br>
</div>

