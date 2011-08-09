<div class="candidateProfiles form">
<?php echo $this->Form->create('CandidateProfile');?>
	<fieldset>
		<legend><?php __('Admin Add Candidate Profile'); ?></legend>
	<?php
		echo $this->Form->input('candidate_id');
		echo $this->Form->input('birth');
		echo $this->Form->input('profession');
		echo $this->Form->input('sons');
		echo $this->Form->input('civil_status');
		echo $this->Form->input('religion');
		echo $this->Form->input('twitter');
		echo $this->Form->input('facebook');
		echo $this->Form->input('highschool');
		echo $this->Form->input('assets');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate', true), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Links', true), array('controller' => 'candidate_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Link', true), array('controller' => 'candidate_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Parties', true), array('controller' => 'candidate_parties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Party', true), array('controller' => 'candidate_parties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Political Experiences', true), array('controller' => 'candidate_political_experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Political Experience', true), array('controller' => 'candidate_political_experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate University Studies', true), array('controller' => 'candidate_university_studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate University Study', true), array('controller' => 'candidate_university_studies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Work Experiences', true), array('controller' => 'candidate_work_experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Work Experience', true), array('controller' => 'candidate_work_experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>