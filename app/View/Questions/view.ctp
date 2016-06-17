<div class="questions index">

	<h3>Questão #<?php echo $question['Question']['id']?></h3>

	<table cellpadding="0" cellspacing="0">
		<tr>
			<th width="100"><?php echo $question['Question']['description'];?></th>
			<th width="100"><?php echo $this->Paginator->sort('description', 'Enunciado');?></th>
			<th><?php echo $this->Paginator->sort('grade_id', 'Disciplina');?></th>
			<th><?php echo $this->Paginator->sort('content_id', 'Conteúdo');?></th>
			<th width="130" align="center">Ações</th>
		</tr>

		<?php foreach ($questions as $question): ?>
		<tr>
			<td><?php echo $this->Form->checkbox('published', array('hiddenField' => false)); ?></td>
			<td><?php echo $this->Text->truncate($question['Question']['description'],50, ['ellipsis' => '...', 'exact' => false]); ?></td>
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