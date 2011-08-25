<div class="sourceOfAnswers index">
	<h2><?php __('Source Of Answers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>

			<th>Pregunta</th>
			<th>Respuesta</th>
			<th>Descripción</th>
			<th><?php echo $this->Paginator->sort('link');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sourceOfAnswers as $sourceOfAnswer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>

		<td><?php echo $sourceOfAnswer['Weight']['Question']['question'];?></td>
		<td><?php echo $sourceOfAnswer['Weight']['Answer']['answer'];?></td>
		<td><?php echo $sourceOfAnswer['Weight']['Candidate']['name'].' dijo "'.$sourceOfAnswer['SourceOfAnswer']['sentence'].'" en '.$sourceOfAnswer['SourceOfAnswer']['media_name'];?></td>
		<td><?php echo $this->Html->link('Ir',$sourceOfAnswer['SourceOfAnswer']['link'],array('target'=>'_blank')); ?>&nbsp;</td>
		<td><?php echo $sourceOfAnswer['SourceOfAnswer']['date']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sourceOfAnswer['SourceOfAnswer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sourceOfAnswer['SourceOfAnswer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sourceOfAnswer['SourceOfAnswer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sourceOfAnswer['SourceOfAnswer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
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
	    <li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?></li>
	    <li><?php echo $this->Html->link(__('New Source Of Answer', true), array('action' => 'add')); ?></li>
	</ul>
</div>