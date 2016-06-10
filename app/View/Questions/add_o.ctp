

<div class="questions form">
<fieldset>
        <legend><?php echo ('Cadastrar Questão Objetiva'); ?></legend>
	<?php
	echo $this->Form->create('Question');
	echo $this->Form->input('id');
	echo $this->Form->input('grade_id', ['label' => 'Disciplina', 'empty' => '-Escolha a Disciplina-']);
	echo $this->Form->input('content_id', ['label' => 'Conteúdo', 'empty' => '-Escolha o Conteúdo-']);	
	echo $this->Form->input('description',['label'=>'Enunciado da Questão', 'rows'=>'3']);
    echo $this->Form->input('type', array('type'=>'hidden', 'value' => 'o'));
	//echo $this->Form->end('Enviar');
	?>
    <table id="answers" cellpadding="0" cellspacing="0">
    <tr>
        <th>Respostas</th>
        <th style="width:45px;text-align:center;">Correta</th>        
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.0.description',array('label'=>'','type'=>'text')); ?></td>        
        <td><?php echo $this->Form->input('Answer.0.is_correct', array('type'=>'radio', 'options' => [1 => ''])); ?></td>
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.1.description',array('label'=>'','type'=>'text')); ?></td>        
        <td><?php echo $this->Form->input('Answer.1.is_correct', array('type'=>'radio', 'options' => [1 => ''])); ?></td>
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.3.description',array('label'=>'','type'=>'text')); ?></td>        
        <td><?php echo $this->Form->input('Answer.3.is_correct', array('type'=>'radio', 'options' => [1 => ''])); ?></td>
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.4.description',array('label'=>'','type'=>'text')); ?></td>        
        <td><?php echo $this->Form->input('Answer.4.is_correct', array('type'=>'radio', 'options' => [1 => ''])); ?></td>
    </tr>    
    </table>
<?php echo $this->Form->end('Cadastrar'); ?>

</fieldset>



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
