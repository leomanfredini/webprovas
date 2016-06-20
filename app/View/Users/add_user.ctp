<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend> Adicionar Usuário</legend>
		<?php
			echo $this->Form->input('name', ['label' => 'Nome Completo', ]);
			echo $this->Form->input('username', ['label' => 'Nome de Usuário', ]);
			echo $this->Form->input('password', ['label' => 'Senha', ]);
			echo $this->Form->input('grade_id', ['label' => 'Associar usuário à disciplina', 'empty' => '- Escolha a Disciplina -']);
			echo $this->Form->input('role', ['label' => 'Função', 'options' => ['user' => 'Usuário', 'admin' => 'Administrador']]);
			echo $this->Form->end('Adicionar');
		?>		
	</fieldset>


</div> 

<div class="actions">
	<?php
		if ($this->Session->valid()){
			echo $this->element('menu_main'). '<br><hr><br>';	
		}
	?>
    <?php echo $this->element('menu_users'); ?>    
</div>
