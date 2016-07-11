<div class="users index">
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
    	if ($this->Session->check('User_id')){
    		echo $this->element('menu_main');
    		echo '<br><hr><br>';
    		echo $this->element('menu_users');
		} else {
			echo $this->element('menu_login');
	}
?>  
</div>