<?php
echo $this->Form->create('Content');
    echo $this->Form->input('grade_id', ['label' => 'Disciplina']);
    //echo $this->Form->input('Grade.id', array('options' => $grades));
    echo $this->Form->input('name', ['label' => 'Conteúdo']);
    echo $this->Form->end('Cadastrar');
?>