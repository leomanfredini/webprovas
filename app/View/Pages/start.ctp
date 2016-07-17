<div class="start index">

	<h2>Bem-Vindo ao WebProvas</h2>
	<br>
	<h4>O WebProvas é uma aplicação criada para auxiliar o professor na gestão de suas questões, oferecendo um método simplificado para o armazenamento e organização.</h4>
	<br>
	<h4>Além de manter as questões salvas, o WebProvas possibilita também a criação de exames e testes....</h4>
	<br>
	<h4>Efetue o seu cadastro gratuito e comece agora mesmo a utilizar o WebProvas</h4>
	<br><br>


</div>

<div class="actions">	
    <?php //echo AuthComponent::user('role');
    	if ($this->Session->check('User_id')){
    		echo $this->element('menu_main');
		} else {
			echo $this->element('menu_login');
	}
?>  
</div>