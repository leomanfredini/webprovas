<h3>Menu Questões</h3>
<ul>
    <li><?php echo $this->Html->link('Listar Questões', ['controller' => 'questions', 'action' => 'index']); ?></li>	
    <li><?php echo $this->Html->link('Add Questão Objetiva', ['controller' => 'questions', 'action' => 'add_o']); ?></li>
    <li><?php echo $this->Html->link('Add Questão Dissertativa', ['controller' => 'questions', 'action' => 'add_d']); ?></li>
    <li><?php echo $this->Html->link("Gerar Prova", ['controller' => 'exams', 'action' => 'view_selected_questions']); ?></li>
</ul> 