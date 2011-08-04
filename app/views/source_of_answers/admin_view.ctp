<div class="sourceOfAnswers view">
<h2><?php  __('Source Of Answer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sourceOfAnswer['SourceOfAnswer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Weight'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sourceOfAnswer['Weight']['weighting'], array('controller' => 'weights', 'action' => 'view', $sourceOfAnswer['Weight']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sentence'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sourceOfAnswer['SourceOfAnswer']['sentence']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sourceOfAnswer['SourceOfAnswer']['media_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Link'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sourceOfAnswer['SourceOfAnswer']['link']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sourceOfAnswer['SourceOfAnswer']['date']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Source Of Answer', true), array('action' => 'edit', $sourceOfAnswer['SourceOfAnswer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Source Of Answer', true), array('action' => 'delete', $sourceOfAnswer['SourceOfAnswer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sourceOfAnswer['SourceOfAnswer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source Of Answer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>
