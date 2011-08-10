<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
		<legend><?php __('Admin Edit Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
                echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
<div>
	<h2><?php
	__('Questions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question');?></th>
			<th><?php echo $this->Paginator->sort('explanation');?></th>
			<th><?php echo $this->Paginator->sort('short_description');?></th>
			<th><?php echo $this->Paginator->sort('category_id');?></th>
			<th><?php echo $this->Paginator->sort('sour');?></th>
			<th><?php echo $this->Paginator->sort('public',array('checked'=>true));?></th>
			<th><?php echo $this->Paginator->sort('included_in_media_naranja',array('checked'=>true));?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($questions as $question):
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
		<td><?php echo $this->data['Category']['name'];?></td>
		<td><?php echo $this->Admin->booleanValue($question['Question']['sour']); ?>&nbsp;</td>
		<td><?php echo $this->Admin->booleanValue($question['Question']['public']); ?>&nbsp;</td>
		<td><?php echo $this->Admin->booleanValue($question['Question']['included_in_media_naranja']); ?>&nbsp;</td>
		<td><?php echo $question['Question']['order']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $question['Question']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $question['Question']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $question['Question']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $question['Question']['id'])); ?>
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
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Category.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Category.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Result Details', true), array('controller' => 'result_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Result Detail', true), array('controller' => 'result_details', 'action' => 'add')); ?> </li>
	</ul>
</div>