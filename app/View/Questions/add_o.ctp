

<div class="questions form">
<fieldset>
        <legend><?php echo ('Cadastrar Questão Objetiva'); ?></legend>
	<?php
	echo $this->Form->create('Question');
	echo $this->Form->input('id');
	echo $this->Form->input('grade_id', ['label' => 'Disciplina', 'empty' => '- Escolha a Disciplina -']);
	echo $this->Form->input('content_id', ['label' => 'Conteúdo', 'empty' => '- Escolha o Conteúdo -']);	
	echo $this->Form->input('description',['label'=>'Enunciado da Questão', 'rows'=>'3']);
    echo $this->Form->input('type', ['type'=>'hidden', 'value' => 'o']);
    echo $this->Form->input('user_id', ['type'=>'hidden', 'value' => $this->Session->read('User_id')]);
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
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.1.description', ['label'=>'','type'=>'text']); ?></td>        
        <td><?php echo $this->Form->input('Answer.1.is_correct', ['type'=>'radio', 'options' => [1 => '']]); ?></td>
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.2.description', ['label'=>'','type'=>'text']); ?></td>        
        <td><?php echo $this->Form->input('Answer.2.is_correct', ['type'=>'radio', 'options' => [1 => '']]); ?></td>
    </tr>
    <tr>        
        <td><?php echo $this->Form->input('Answer.3.description', ['label'=>'','type'=>'text']); ?></td>        
        <td><?php echo $this->Form->input('Answer.3.is_correct', ['type'=>'radio', 'options' => [1 => '']]); ?></td>
    </tr>  
    <tr>        
        <td><?php echo $this->Form->input('Answer.4.description', ['label'=>'','type'=>'text']); ?></td>        
        <td><?php echo $this->Form->input('Answer.4.is_correct', ['type'=>'radio', 'options' => [1 => '']]); ?></td>
    </tr>    
    </table>
<?php echo $this->Form->end('Cadastrar'); ?>

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





<script type="text/javascript">
function edits()
{
if(document.getElementById("name").value=="")
{
    alert("Please enter your whole name.")
    return false;
}
    if(document.getElementById("jarreau").checked=="")
{
    alert("Please enter your whole name.")
    return false;
}
    else if(document.getElementById("aretha").checked=="")
{
    alert("Please enter your whole name.")
    return false;
}
    else if(document.getElementById("withers").checked=="")
{
    alert("Please enter your whole name.")
    return false;
}
    else if(document.getElementById("joel").checked=="")
{
    alert("Please enter your whole name.")
    return false;
}
    else if(document.getElementById("warwidk").checked=="")
{
    alert("Please enter your whole name.")
    return false;
}
    
else return true;
}
 
</script>
