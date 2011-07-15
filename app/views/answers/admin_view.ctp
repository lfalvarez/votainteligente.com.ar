<div class="answers view">
<h2><?php  __('Answer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $answer['Answer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Answer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $answer['Answer']['answer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($answer['Question']['question'], array('controller' => 'questions', 'action' => 'view', $answer['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Public'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Admin->booleanValue($answer['Answer']['public']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Answer', true), array('action' => 'edit', $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Answer', true), array('action' => 'delete', $answer['Answer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Weights');?></h3>
	<?php if (!empty($answer['Weight'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Question Id'); ?></th>
		<th><?php __('Candidate Id'); ?></th>
		<th><?php __('Answer Id'); ?></th>
		<th><?php __('Weighting'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($answer['Weight'] as $weight):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $weight['id'];?></td>
			<td><?php echo $weight['question_id'];?></td>
			<td><?php echo $weight['candidate_id'];?></td>
			<td><?php echo $weight['answer_id'];?></td>
			<td><?php echo $weight['weighting'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'weights', 'action' => 'view', $weight['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'weights', 'action' => 'edit', $weight['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'weights', 'action' => 'delete', $weight['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $weight['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
