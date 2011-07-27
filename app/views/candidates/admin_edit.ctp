<div class="candidates form">
<?php echo $this->Form->create('Candidate');?>
	<fieldset>
		<legend><?php __('Admin Edit Candidate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('slug');
		echo $this->Form->input('name');
		echo $this->Form->input('imagepath');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Candidate.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Candidate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>