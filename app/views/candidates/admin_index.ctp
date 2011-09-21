<div class="candidates index">
	<h2><?php __('Candidates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th>Imagen</th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($candidates as $candidate):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $candidate['Candidate']['name']; ?>&nbsp;</td>
		<td><?php

		    $image = $candidate['Candidate']['imagepath'];

		echo $this->Html->image($image,array('width'=>100)); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('controller'=>'profiles','action' => 'view','admin'=>false, $candidate['Candidate']['slug'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $candidate['Candidate']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $candidate['Candidate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidate['Candidate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Candidate', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index','controller'=>'questions'));?></li>
		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index','controller'=>'source_of_answers'));?></li>
	</ul>
</div>