<div class="candidateWorkExperiences view">
<h2><?php  __('Candidate Work Experience');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateWorkExperience['CandidateWorkExperience']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Candidate Profile'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidateWorkExperience['CandidateProfile']['name'], array('controller' => 'candidate_profiles', 'action' => 'view', $candidateWorkExperience['CandidateProfile']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Starting Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateWorkExperience['CandidateWorkExperience']['starting_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ending Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateWorkExperience['CandidateWorkExperience']['ending_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateWorkExperience['CandidateWorkExperience']['position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateWorkExperience['CandidateWorkExperience']['company']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate Work Experience', true), array('action' => 'edit', $candidateWorkExperience['CandidateWorkExperience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Candidate Work Experience', true), array('action' => 'delete', $candidateWorkExperience['CandidateWorkExperience']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateWorkExperience['CandidateWorkExperience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Work Experiences', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Work Experience', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
