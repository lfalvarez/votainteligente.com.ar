<div class="questions view">
<h2><?php  __('Question');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['question']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Explanation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['explanation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['short_description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($question['Category']['name'], array('controller' => 'categories', 'action' => 'view', $question['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sour'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Admin->booleanValue($question['Question']['sour']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Public'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Admin->booleanValue($question['Question']['public']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Included In Media Naranja'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Admin->booleanValue($question['Question']['included_in_media_naranja']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question', true), array('action' => 'edit', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Question', true), array('action' => 'delete', $question['Question']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Answers');?></h3>
	<?php if (!empty($question['Answer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Answer'); ?></th>
		<th><?php __('Question Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($question['Answer'] as $answer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $answer['id'];?></td>
			<td><?php echo $answer['answer'];?></td>
			<td><?php echo $answer['question_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'answers', 'action' => 'delete', $answer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $answer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Weights');?></h3>
	<?php if (!empty($question['Weight'])):?>
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
		foreach ($question['Weight'] as $weight):
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
