

<div class="questions form">
<fieldset>
        <legend><?php echo ('Editar Questão Objetiva'); ?></legend>
	<?php
	echo $this->Form->create('Question');
	echo $this->Form->input('id');
	echo $this->Form->input('grade_id', ['label' => 'Disciplina', 'empty' => '-Escolha a Disciplina-']);
	echo $this->Form->input('content_id', ['label' => 'Conteúdo', 'empty' => '-Escolha o Conteúdo-']);	
	echo $this->Form->input('description',['label'=>'Enunciado da Questão', 'rows'=>'3']);
    echo $this->Form->input('type', ['type'=>'hidden', 'value' => 'o']);
	//echo $this->Form->end('Enviar');
	?>
    <table id="answers" cellpadding="0" cellspacing="0">
    <tr>
        <th>Alternativas</th>
        <th style="width:45px;text-align:center;">Correta</th>        
    </tr>
    <tr>                 
        <td><?php echo $this->Form->input('Answer.0.description', ['label'=>'','type'=>'text']); ?></td>        
        <td><?php echo $this->Form->input('Answer.0.is_correct', ['type'=>'radio', 'options' => [1 => '']]); ?></td>
        <td><?php echo $this->Form->input('Answer.0.id', ['type'=>'hidden']); ?></td>
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.1.description', ['label'=>'','type'=>'text']); ?></td>        
        <td><?php echo $this->Form->input('Answer.1.is_correct', ['type'=>'radio', 'options' => [1 => '']]); ?></td>
        <td><?php echo $this->Form->input('Answer.1.id', ['type'=>'hidden']); ?></td>
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.2.description', ['label'=>'','type'=>'text']); ?></td>        
        <td><?php echo $this->Form->input('Answer.2.is_correct', ['type'=>'radio', 'options' => [1 => '']]); ?></td>
        <td><?php echo $this->Form->input('Answer.2.id', ['type'=>'hidden']); ?></td>
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.3.description', ['label'=>'','type'=>'text']); ?></td>        
        <td><?php echo $this->Form->input('Answer.3.is_correct', ['type'=>'radio', 'options' => [1 => '']]); ?></td>
        <td><?php echo $this->Form->input('Answer.3.id', ['type'=>'hidden']); ?></td>
    </tr>    
    </table>
<?php echo $this->Form->end('Alterar'); ?>

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
