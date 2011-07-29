<div class="sourceOfAnswers form">
<?php echo $this->Form->create('SourceOfAnswer');?>
	<fieldset>
		<legend><?php __('Admin Edit Source Of Answer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('weight_id');
		echo $this->Form->input('sentence');
		echo $this->Form->input('media_name');
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SourceOfAnswer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SourceOfAnswer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>