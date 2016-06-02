<?php
echo $this->Form->create('Grade', ['url' => ['controller' => 'contents', 'action' => 'add']]);
    
	//echo $this->Form->text('name');
	echo $this->Form->input('Grade.name', ['label' => 'Disciplina']);
    echo $this->Form->input('Content.name', ['label' => 'Conteúdo']);
    //echo $this->Form->input('id', ['type' => 'hidden']);    
    echo $this->Form->end('Cadastrar');
?>
