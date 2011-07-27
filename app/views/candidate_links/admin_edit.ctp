<div class="candidateLinks form">
<?php echo $this->Form->create('CandidateLink');?>
	<fieldset>
		<legend><?php __('Admin Edit Candidate Link'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('candidate_profile_id');
		echo $this->Form->input('description');
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CandidateLink.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CandidateLink.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Candidate Links', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>