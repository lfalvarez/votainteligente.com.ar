<div class="questions index">
    <?php foreach ($orderedQuestions as $categoryId=>$category) {?>
    <h2><?php echo $category['name']; ?></h2>
    <?php echo $this->Html->link('Agregar otra pregunta', '/admin/questions/add/'.$categoryId); ?>
    -
    <?php echo $this->Html->link('Elimina la categoria '.$category['name'], array('controller'=>'categories','action' => 'delete', $categoryId), null, sprintf(__('Estas seguro de querer eliminar la categoria %s y todas sus preguntas', true), $category['name'])); ?>
    <table cellpadding="0" cellspacing="0">
    <tr>
		    <th><?php echo $this->Paginator->sort('id');?></th>
		    <th><?php echo $this->Paginator->sort('question');?></th>
		    <th><?php echo $this->Paginator->sort('explanation');?></th>
		    <th><?php echo $this->Paginator->sort('short_description');?></th>
		    <th><?php echo $this->Paginator->sort('sour');?></th>
		    <th><?php echo $this->Paginator->sort('public',array('checked'=>true));?></th>
		    <th><?php echo $this->Paginator->sort('included_in_media_naranja',array('checked'=>true));?></th>
		    <th><?php echo $this->Paginator->sort('order');?></th>
		    <th class="actions"><?php __('Actions');?></th>
    </tr>
	<?php
	    $i = 0;
	    foreach ($category['questions'] as $question):
		    $class = null;
		    if ($i++ % 2 == 0) {
			    $class = ' class="altrow"';
		    }
	    ?>
	    <tr<?php echo $class;?>>
		    <td><?php echo $question['Question']['id']; ?>&nbsp;</td>
		    <td><?php echo $question['Question']['question']; ?>&nbsp;</td>
		    <td><?php echo $question['Question']['explanation']; ?>&nbsp;</td>
		    <td><?php echo $question['Question']['short_description']; ?>&nbsp;</td>
		    <td><?php echo $this->Admin->booleanValue($question['Question']['sour']); ?>&nbsp;</td>
		    <td><?php echo $this->Admin->booleanValue($question['Question']['public']); ?>&nbsp;</td>
		    <td><?php echo $this->Admin->booleanValue($question['Question']['included_in_media_naranja']); ?>&nbsp;</td>
		    <td><?php echo $question['Question']['order']; ?>&nbsp;</td>
		    <td class="actions">
			    <?php echo $this->Html->link(__('View', true), array('action' => 'view', $question['Question']['id'])); ?>
			    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $question['Question']['id'])); ?>
			    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $question['Question']['id']), null, sprintf(__('¿Estas seguro de querer eliminar la pregunta \'%s\' y sus respuesta?', true), $question['Question']['question'])); ?>
		    </td>
	    </tr>
	<?php endforeach; ?>
	</table>
    <?php } ?>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Question', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>