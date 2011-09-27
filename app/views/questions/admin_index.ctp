<?php echo $this->Html->script('jquery.editinplace'); ?>
<script>
    $(document).ready(function(){
	$(".editInPlace").editInPlace({
		saving_animation_color: "#ECF2F8",
		callback: function(idOfEditor, enteredText, orinalHTMLContent, settingsParams, animationCallbacks) {
			/*animationCallbacks.didStartSaving();
			setTimeout(animationCallbacks.didEndSaving, 2000);
			return enteredText;*/

			var categoryId = $(this).attr('categoryId');
			var data = {
			    'data[name]':enteredText
			};
			$.post('<?php echo Router::url(array('prefix' => 'admin', 'controller'=>'categories','action'=>'editName'));?>/'+categoryId,data);

			return enteredText;
		}
	});
    });
</script>
<div class="questions index">
    <?php foreach ($orderedQuestions as $categoryId=>$category) {?>
    <h2 class="editInPlace" categoryId="<?php echo $categoryId; ?>"><?php echo $category['name']; ?></h2>
    <?php echo $this->Html->link('Agregar otra pregunta', '/admin/questions/add/'.$categoryId); ?>
    -
    <?php echo $this->Html->link('Elimina la categoria '.$category['name'], array('controller'=>'categories','action' => 'delete', $categoryId), null, sprintf(__('Estas seguro de querer eliminar la categoria %s y todas sus preguntas', true), $category['name'])); ?>
    -
    <?php echo $this->Html->link('&uarr;', '/admin/categories/moveUp/'.$categoryId,array('escape'=>false)); ?>
    -
    <?php echo $this->Html->link('&darr;', '/admin/categories/moveDown/'.$categoryId,array('escape'=>false)); ?>
    <table cellpadding="0" cellspacing="0">
    <tr>
		    <th><?php echo $this->Paginator->sort('question');?></th>
		    <th><?php echo $this->Paginator->sort('short_description');?></th>
		    <th><?php echo $this->Paginator->sort('public');?></th>
		    <th><?php echo $this->Paginator->sort('included_in_media_naranja');?></th>
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
		    <td><?php echo $question['Question']['question']; ?>&nbsp;</td>
		    <td><?php echo $question['Question']['short_description']; ?>&nbsp;</td>
		    <td><?php echo $this->Admin->booleanValue($question['Question']['public']); ?>&nbsp;</td>
		    <td><?php echo $this->Admin->booleanValue($question['Question']['included_in_media_naranja']); ?>&nbsp;</td>
		    <td><?php echo $this->Html->link('&uarr;', '/admin/questions/moveUp/'.$question['Question']['id'],array('escape'=>false)); ?>
			-
			<?php echo $this->Html->link('&darr;', '/admin/questions/moveDown/'.$question['Question']['id'],array('escape'=>false)); ?>
		    </td>
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
		<li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index','controller'=>'candidates'));?></li>
		<li><?php echo $this->Html->link(__('New Question', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index','controller'=>'source_of_answers'));?></li>
	</ul>
</div>