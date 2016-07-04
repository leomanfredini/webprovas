<div class="questions index">

	<h3>Questões Selecionadas</h3>	
	

	<?php if (is_array($exams) || is_object($exams)) { ?>

	<table cellpadding="0" cellspacing="0">
		<tr>
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


		<?php foreach ($exams as $val => $question): ?>
			
		<tr>			
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
				<?php //echo $this->Form->postlink('Editar', ['action' => 'edit', $question['Question']['id']]); ?> 
				<?php echo $this->Form->postlink('Remover da Prova', ['action' => 'remove_selected_item', $question['Question']['id']], ['confirm' => 'Tem certeza que deseja remover esta questão da prova?']); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>

	<div>
		<?php
			echo '<br><br>';
			echo $this->Html->link('Gerar prova do aluno', ['action' => 'generate_exam_student'], ['target' => '_blank']);
			echo '&nbsp;&nbsp;|&nbsp;&nbsp;';
			echo $this->Html->link('Gerar prova do professor', ['action' => 'generate_exam_teacher'], ['target' => '_blank']);
		?>
		
	</div>

	<?php 
	} else {
		echo '<h2>Nenhuma Questão Selecionada</h2>';
		//echo $this->Html->link('Clique aqui para selecionar algumas questões', ['controller' => 'questions', 'action' => 'index']);
	} ?>



</div>

<div class="actions">
    <?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_exams'); ?>
</div>
