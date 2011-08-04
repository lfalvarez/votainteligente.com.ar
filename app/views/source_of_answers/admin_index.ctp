<div class="sourceOfAnswers index">
	<h2><?php __('Source Of Answers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('weight_id');?></th>
			<th><?php echo $this->Paginator->sort('sentence');?></th>
			<th><?php echo $this->Paginator->sort('media_name');?></th>
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
		<td><?php echo $sourceOfAnswer['SourceOfAnswer']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sourceOfAnswer['Weight']['weighting'], array('controller' => 'weights', 'action' => 'view', $sourceOfAnswer['Weight']['id'])); ?>
		</td>
		<td><?php echo $sourceOfAnswer['SourceOfAnswer']['sentence']; ?>&nbsp;</td>
		<td><?php echo $sourceOfAnswer['SourceOfAnswer']['media_name']; ?>&nbsp;</td>
		<td><?php echo $sourceOfAnswer['SourceOfAnswer']['link']; ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('New Source Of Answer', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>