<div class="exams index">
<?php echo $this->Form->create('Exam'); ?>
	<fieldset>
		<legend>Salvar Prova</legend>
		<?php
			echo $this->Form->input('title', ['label' => 'Título da Prova', ]);
			echo $this->Form->input('description', ['label' => 'Descrição da Prova']);
			echo $this->Form->input('class', ['label' => 'Turma']);			
			echo $this->Form->input('date', ['label' => 'Data da Aplicação', 'type' => 'date', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 110, 'maxYear' => date('Y') - 0 ]);
			echo $this->Form->input('questions_selected', ['label' => 'Questões', 'value' => $this->Session->read('Exams_select'), 'readonly' => 'readonly']);
			echo $this->Form->input('user_id', ['type'=>'hidden', 'value' => $this->Session->read('User_id')]);
			echo $this->Form->end('Salvar');
		?>		
	</fieldset>
</div>


<div class="actions">	
    <?php
    	if ($this->Session->check('User_id')){
    		echo $this->element('menu_main');
    		echo '<br><hr><br>';
    		echo $this->element('menu_exams');
		} else {
			echo $this->element('menu_login');
	}
?>  
</div>