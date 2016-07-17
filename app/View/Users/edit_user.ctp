<div class="users index">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend>Editar Usuário</legend>
		<?php
			echo $this->Form->input('name', ['label' => 'Nome Completo', ]);
			echo $this->Form->input('username', ['label' => 'Nome de Usuário (Não pode ser alterado)', 'readonly' => 'readonly' ]);
			echo $this->Form->input('password_update', ['label' => 'Nova Senha (Deixe em branco para não alterá-la)', 'type'=>'password','required' => 0]);
			echo $this->Form->input('password_confirm_update', ['label' => 'Confirmar Nova Senha', 'type'=>'password','required' => 0]);
			echo $this->Form->input('grade_id', ['label' => 'Associar usuário à disciplina', 'empty' => '- Escolha a Disciplina -']);
			//echo $this->Form->input('role', ['label' => 'Função', 'options' => ['user' => 'Usuário', 'admin' => 'Administrador']]);
			echo $this->Form->end('Alterar');
		?>		
	</fieldset>
</div>

<div class="actions">	
    <?php
    	if ($this->Session->check('User_id')){
    		echo $this->element('menu_main');
    		echo '<br><hr><br>';
    		echo $this->element('menu_users');
		} else {
			echo $this->element('menu_login');
	}
?>  
</div>