

<div class="questions form">
<fieldset>
        <legend><?php echo ('Editar Questão Dissertativa'); ?></legend>
	<?php
	echo $this->Form->create('Question');
	echo $this->Form->input('id');
	echo $this->Form->input('grade_id', ['label' => 'Disciplina', 'empty' => '-Escolha a Disciplina-']);
	echo $this->Form->input('content_id', ['label' => 'Conteúdo', 'empty' => '-Escolha o Conteúdo-']);	
	echo $this->Form->input('description',['label'=>'Enunciado da Questão', 'rows'=>'3']);
    echo $this->Form->input('Answer.0.description',['label'=>'Resposta', 'rows'=>'3']);
    echo $this->Form->input('Answer.0.is_correct', ['type'=>'hidden', 'value' => '1']);
    echo $this->Form->input('Answer.0.id', ['type'=>'hidden']);
    echo $this->Form->input('type', ['type'=>'hidden', 'value' => 'd']);
	echo $this->Form->end('Alterar');
	?>
    
</fieldset>
</div>

<div class="actions">
    <?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_questions'); ?>
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
