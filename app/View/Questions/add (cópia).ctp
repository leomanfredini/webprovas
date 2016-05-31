<?php echo $this->Form->create('Question'); ?>
	<fieldset>
		<legend>Adicionar Questão</legend>
		<?php
			echo $this->Form->input('tipo', ['label' => 'Tipo', 'options' => ['objetiva' => 'Objetiva', 'dissertativa' => 'Dissertativa']]);
			echo $this->Form->input('disciplina', ['label' => 'Disciplina', ]);
			echo $this->Form->input('descricao', ['label' => 'Descrição', ]);
						
			echo $this->Form->end('Adicionar');
		?>		
	</fieldset>


