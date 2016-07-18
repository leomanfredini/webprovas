<div class="exams index">

	<h3>Provas</h3>

	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title', 'Titulo');?></th>
			<th><?php echo $this->Paginator->sort('class', 'Turma');?></th>
			<th><?php echo $this->Paginator->sort('date', 'Data de Aplicação');?></th>
			<th>Ações</th>
		</tr>

		<?php foreach ($exams as $exam): ?>
		<tr>
			<td><?php echo $exam['Exam']['id'] ?></td>
			<td><?php echo $exam['Exam']['title'] ?></td>
			<td><?php echo $exam['Exam']['class'] ?></td>
			<td><?php echo $exam['Exam']['date'] ?></td>
			<td class="actions">
				<?php echo $this->Html->link('Carregar', ['action' => 'load', $exam['Exam']['id']], ['confirm' => 'Carregar esta prova? Esta ação irá eliminar as questões selecionadas até agora.']); ?> 				
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

<div class="actions">
    <?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_exams'); ?>
    <!-- <br><hr><br> -->
    <?php //echo $this->element('menu_users'); ?>
</div>

