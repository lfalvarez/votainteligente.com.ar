<div class="candidateWorkExperiences form">
<?php echo $this->Form->create('CandidateWorkExperience');?>
	<fieldset>
		<legend><?php __('Admin Add Candidate Work Experience'); ?></legend>
	<?php
		echo $this->Form->input('candidate_profile_id');
		echo $this->Form->input('starting_year');
		echo $this->Form->input('ending_year');
		echo $this->Form->input('position');
		echo $this->Form->input('company');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Candidate Work Experiences', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>