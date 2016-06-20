<div class="questions index">

	<h3>Questões</h3>


	<div class="filters">
		<h1>Filtrar por:</h1>
		
				
		<?php
		// The base url is the url where we'll pass the filter parameters
		$base_url = array('controller' => 'questions', 'action' => 'index');
		echo $this->Form->create('Question', array('url' => $base_url, 'class' => 'filter'));
		// add a select input for each filter. It's a good idea to add a empty value and set
		// the default option to that.
		echo $this->Form->input('grade_id', array('label' => 'Disciplina', 'options' => $grades, 'empty' => '- Todas -', 'default' => ''));
		echo $this->Form->input('content_id', array('label' => 'Conteúdo', 'options' => $contents, 'empty' => '- Todos -', 'default' => ''));
		// Add a basic search 
		//echo $this->Form->input("search", array('label' => 'Pesquisar', 'placeholder' => "Pesquisar por..."));

		echo $this->Form->submit("Buscar");

		// To reset all the filters we only need to redirect to the base_url
		echo "<div class='submit actions'>";
		echo $this->Html->link("Reset",$base_url);
		echo "</div>";
		echo $this->Form->end();
		?>

	</div>

	<table cellpadding="0" cellspacing="0">
		<tr>
			<th width="10"></th>
			<th width="300"><?php echo $this->Paginator->sort('description', 'Enunciado');?></th>
			<th><?php echo $this->Paginator->sort('grade_id', 'Disciplina');?></th>
			<th><?php echo $this->Paginator->sort('content_id', 'Conteúdo');?></th>
			<th width="130" align="center">Ações</th>
		</tr>

		<?php foreach ($questions as $question): ?>
		<tr>
			<td><?php echo $this->Form->checkbox('published', array('hiddenField' => false)); ?></td>
			<td><?php echo $this->Html->link($this->Text->truncate($question['Question']['description'],50, ['ellipsis' => '...', 'exact' => false]), ['controller' => 'questions' , 'action' => 'view', $question['Question']['id']]); ?></td>
			<td><?php echo $question['Grade']['name']; ?></td>
			<td><?php echo $question['Content']['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('Editar', ['action' => 'edit', $question['Question']['id']]); ?> 
				<?php echo $this->Form->postlink('Excluir', ['action' => 'delete', $question['Question']['id']], ['confirm' => 'Tem certeza?']); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
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