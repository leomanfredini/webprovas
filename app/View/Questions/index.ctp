
<div class="questions index">

	<h3>Questões</h3>



	<div class="filters">
		<h1>Filtrar por:</h1>		
				
		<?php		

		$base_url = ['controller' => 'questions', 'action' => 'index'];
		echo $this->Form->create('Question', ['url' => $base_url, 'class' => 'filter']);
		
		echo $this->Form->input('grade_id', ['label' => 'Disciplina', 'options' => $grades, 'empty' => '- Todas -', 'default' => '']);
		echo $this->Form->input('content_id', ['label' => 'Conteúdo', 'options' => $contents, 'empty' => '- Todos -', 'default' => '']);
		// Adiciona o campo de busca por palavra chave
		//echo $this->Form->input("search", ['label' => 'Pesquisar', 'placeholder' => "Pesquisar por..."]);

		echo $this->Form->submit("Filtrar");

		// Adiciona o botão de reset
		//echo "<div class='submit actions'>";
		//echo $this->Html->link("Listar Todas",$base_url);		
		//echo "</div>";		

		echo $this->Form->end();
		?>

	</div>

	<div class='submit actions'>	
		<?php echo $this->Html->link("Listar Todas",$base_url);	?>
	</div>


	<table cellpadding="0" cellspacing="0">
		<tr>
			<th width="10"></th>
			<th width="300">
				<?php echo $this->Paginator->sort('description', 'Enunciado');?>
			</th>
			<th>
				<?php echo $this->Paginator->sort('grade_id', 'Disciplina');?>
			</th>
			<th>
				<?php echo $this->Paginator->sort('content_id', 'Conteúdo');?>
			</th>
			<th>
				<?php echo $this->Paginator->sort('type', 'Tipo');?>
			</th>
			<th width="130" align="center">Ações</th>
		</tr>

		<?php foreach ($questions as $question): ?>
		<tr>
			<td>
				<?php echo $this->Form->checkbox('published', ['checked' => ($this->requestAction(['controller'=>'exams', 'action'=>'read_selected_item', $question['Question']['id']])), 'value' => $question['Question']['id'], 'disabled' => false]); ?>
			</td>
			<td>
				<?php echo $this->Html->link($this->Text->truncate($question['Question']['description'],50, ['ellipsis' => '...', 'exact' => false]), ['controller' => 'questions' , 'action' => 'view', $question['Question']['id']]); ?>
			</td>
			<td>
				<?php echo $question['Grade']['name']; ?>
			</td>
			<td>
				<?php echo $question['Content']['name']; ?>
			</td>
			<td>
				<?php echo $question['Question']['type']; ?>
			</td>
			<td class="actions">
				<?php //echo $this->Form->postlink('Add', ['controller' => 'exams' , 'action' => 'add_question_to_exam', $question['Question']['id']]); ?>
				<?php //echo $this->Form->postlink('Verif', ['type' => 'hidden', 'controller' => 'exams' , 'action' => 'read_selected_item', $question['Question']['id']]); ?> 
				<?php echo $this->Form->postlink('Editar', ['action' => 'edit', $question['Question']['id']]); ?> 
				<?php echo $this->Form->postlink('Excluir', ['action' => 'delete', $question['Question']['id']], ['confirm' => 'Tem certeza que deseja excluir definitivamente esta questão?']); ?>
			</td>
		</tr>
		<?php endforeach; ?>

	</table>
	<div class='paging'>
	<?php
	echo $this->Paginator->prev('« Anterior', null, null, ['class' => 'desabilitado']);
	echo $this->Paginator->numbers();
	echo $this->Paginator->next('Próxima »', null, null, ['class' => 'desabilitado']);
	?>
	</div>

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



<script>

	$(function() {

		$("input[type=checkbox").change(function(e) {

			question_id = $(this).val();
			checked = $(this).prop("checked");

			baseUrl = 'http://<?php echo $_SERVER['HTTP_HOST']; ?>/exams/';
			url = checked ? 'add_question_to_exam/' : 'remove_selected_item/';
			
			$.ajax({
				url: baseUrl + url + question_id,
				type: 'POST',
				beforeSend: function(e) {
					$.LoadingOverlay("show");
				},
				success: function(data) {
					$.LoadingOverlay("hide");
				},
				error: function() {
					$.LoadingOverlay("hide");
					alert('não foi possível atualizar dados');
				}

			});
		});		

	});
	
</script>