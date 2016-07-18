<div class="grades index">

	<h3>Disciplinas</h3>

	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nome');?></th>
			<th>Ações</th>
		</tr>

		<?php foreach ($grades as $grade): ?>
		<tr>
			<td><?php echo $grade['Grade']['id'] ?></td>
			<td><?php echo $grade['Grade']['name'] ?></td>
			<td class="actions">
				<?php echo $this->Html->link('Editar', ['action' => 'edit', $grade['Grade']['id']]); ?> 
				<?php echo $this->Form->postlink('Excluir', ['action' => 'delete', $grade['Grade']['id']], ['confirm' => 'Tem certeza?']); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

<div class="actions">
	<?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <?php echo $this->element('menu_grades'); ?>	
</div>

