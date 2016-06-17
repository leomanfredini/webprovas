<div class="contents index">
	
	<h3>Conteúdos</h3>
	
	<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('grade_id', 'Disciplina');?></th>
				<th><?php echo $this->Paginator->sort('name', 'Nome');?></th>
				<th class="actions">Ações</th>
		</tr>


		<?php foreach ($contents as $content): ?>
		<tr>
			<td><?php echo $content['Content']['id']; ?></td>
			<td><?php echo $content['Grade']['name']; ?></td>
			<td><?php echo $content['Content']['name']; ?></td>
			<td class="actions">			
				<?php echo $this->Html->link('Editar', ['action' => 'edit', $content['Content']['id']]); ?>
				<?php echo $this->Form->postLink('Excluir', ['action' => 'delete', $content['Content']['id']], ['confirm' => 'Tem certeza?']); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

<div class="actions">
	<?php echo $this->element('menu_main'); ?>
    <br><hr><br>
	<h3>Ações</h3>
	<ul>
		<li><?php echo $this->Html->link('Adicionar Conteúdo', ['action' => 'add']); ?></li>
		<li><?php echo $this->Html->link('Listar Disciplinas', ['controller' => 'grades', 'action' => 'index']); ?> </li>
		<li><?php echo $this->Html->link('Adicionar Disciplina', ['controller' => 'grades', 'action' => 'add']); ?> </li>
	</ul>
</div>
