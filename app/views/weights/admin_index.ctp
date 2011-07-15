<div class="weights index">
	<h2><?php __('Weights');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('candidate_id');?></th>
			<th><?php echo $this->Paginator->sort('answer_id');?></th>
			<th><?php echo $this->Paginator->sort('weighting');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($weights as $weight):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $weight['Weight']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($weight['Question']['question'], array('controller' => 'questions', 'action' => 'view', $weight['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($weight['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $weight['Candidate']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($weight['Answer']['answer'], array('controller' => 'answers', 'action' => 'view', $weight['Answer']['id'])); ?>
		</td>
		<td><?php echo $weight['Weight']['weighting']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $weight['Weight']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $weight['Weight']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $weight['Weight']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $weight['Weight']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Weight', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate', true), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
	</ul>
</div>