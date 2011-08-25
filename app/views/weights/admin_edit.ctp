<div class="weights form">
<?php echo $this->Form->create('Weight');?>
	<fieldset>
		<legend><?php __('Admin Edit Weight'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('candidate_id');
		echo $this->Form->input('answer_id');
		echo $this->Form->input('weighting');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Weight.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Weight.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate', true), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>