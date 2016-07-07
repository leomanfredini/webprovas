<div class="users form">
<?php echo $this->Flash->render('auth'); ?>

<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend>Efetue login para acessar o sistema</legend>
		<?php
			echo $this->Form->input('username', ['label' => 'Usuario', ]);
			echo $this->Form->input('password', ['label' => 'Senha', ]);			
		?>		
	</fieldset>
	<?php echo $this->Form->end('Acessar'); ?>
</div> 

<div class="actions">
    <?php echo $this->element('menu_users'); ?>    
</div>
