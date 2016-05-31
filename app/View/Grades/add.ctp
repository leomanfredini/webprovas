<h1>Adicionar Disciplina</h1>
<?php
	echo $this->Form->create('Grade');
	echo $this->Form->input('name', ['label' => 'Nome da Disciplina']);
	echo $this->Form->end('Cadastrar Disciplina');