<h3>Menu</h3>
<ul>
    <li><?php echo $this->Html->link('Provas', ['controller' => 'exams', 'action' => 'index']); ?></li>
    <li><?php echo $this->Html->link('Questões', ['controller' => 'questions', 'action' => 'index']); ?></li>
    <li><?php echo $this->Html->link('Disciplinas', ['controller' => 'grades', 'action' => 'index']); ?></li>
    <li><?php echo $this->Html->link('Conteúdos', ['controller' => 'contents', 'action' => 'index']); ?></li>
    <li><?php echo $this->Html->link('Usuários', ['controller' => 'users', 'action' => 'index']); ?></li>
</ul>
