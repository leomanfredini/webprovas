

<div class="questions form">
<fieldset>
        <legend><?php echo ('Cadastrar Questão Dissertativa'); ?></legend>
	<?php
	echo $this->Form->create('Question');
	echo $this->Form->input('id');
	echo $this->Form->input('grade_id', ['label' => 'Disciplina', 'empty' => '-Escolha a Disciplina-']);
	echo $this->Form->input('content_id', ['label' => 'Conteúdo', 'empty' => '-Escolha o Conteúdo-']);	
	echo $this->Form->input('description',['label'=>'Enunciado da Questão', 'rows'=>'3']);
    echo $this->Form->input('Answer.0.description',['label'=>'Resposta', 'rows'=>'3']);
    echo $this->Form->input('Answer.0.is_correct', ['type'=>'hidden', 'value' => '1']);
    echo $this->Form->input('type', ['type'=>'hidden', 'value' => 'd']);
	echo $this->Form->end('Cadastrar');
	?>
    
</fieldset>
</div>

<div class="actions">
    <?php echo $this->element('menu'); ?>
    <br><hr><br>
    <h3>Ações</h3>
    <ul>
        <li><?php echo $this->Html->link('Adicionar Questões', ['controller' => 'questions', 'action' => 'add']); ?></li>
    </ul>
    
</div>



<?php
$this->Js->get('#QuestionGradeId')->event('change', 
    $this->Js->request(array(
        'controller'=>'contents',
        'action'=>'getByGrade'
        ), array(
        'update'=>'#QuestionContentId',
        'async' => true,
        'method' => 'post',
        'dataExpression'=>true,
        'data'=> $this->Js->serializeForm(array(
            'isForm' => true,
            'inline' => true
            ))
        ))
    );
?>
