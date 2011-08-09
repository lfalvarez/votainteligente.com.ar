Puedes administrar:
<br />
<ul>
    <li><?php echo $this->Html->link('Usuarios', '/admin/users', array('class' => 'button')); ?></li>
    <li><?php echo $this->Html->link('Candidatos', '/admin/candidates', array('class' => 'button')); ?></li>
    <li><?php echo $this->Html->link('Respuestas', '/admin/answers', array('class' => 'button')); ?></li>
    <li><?php echo $this->Html->link('Categorias', '/admin/categories', array('class' => 'button')); ?></li>
    <li><?php echo $this->Html->link('Preguntas', '/admin/questions', array('class' => 'button')); ?></li>
    <li><?php echo $this->Html->link('Ponderaciones', '/admin/weights', array('class' => 'button')); ?></li>
    <li><?php echo $this->Html->link('Origen de la respuesta de un candidato', '/admin/source_of_answers', array('class' => 'button')); ?></li>
</ul>