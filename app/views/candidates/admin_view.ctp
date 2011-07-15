<div class="candidates view">
<h2><?php  __('Candidate');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidate['Candidate']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidate['Candidate']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imagepath'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidate['Candidate']['imagepath']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate', true), array('action' => 'edit', $candidate['Candidate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Candidate', true), array('action' => 'delete', $candidate['Candidate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidate['Candidate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Weights');?></h3>
	<?php if (!empty($candidate['Weight'])):?>
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
		foreach ($candidate['Weight'] as $weight):
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
