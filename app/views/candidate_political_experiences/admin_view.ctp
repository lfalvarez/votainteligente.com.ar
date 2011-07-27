<div class="candidatePoliticalExperiences view">
<h2><?php  __('Candidate Political Experience');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidatePoliticalExperience['CandidatePoliticalExperience']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Candidate Profile'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidatePoliticalExperience['CandidateProfile']['id'], array('controller' => 'candidate_profiles', 'action' => 'view', $candidatePoliticalExperience['CandidateProfile']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Starting Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidatePoliticalExperience['CandidatePoliticalExperience']['starting_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ending Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidatePoliticalExperience['CandidatePoliticalExperience']['ending_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidatePoliticalExperience['CandidatePoliticalExperience']['position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidatePoliticalExperience['CandidatePoliticalExperience']['type']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate Political Experience', true), array('action' => 'edit', $candidatePoliticalExperience['CandidatePoliticalExperience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Candidate Political Experience', true), array('action' => 'delete', $candidatePoliticalExperience['CandidatePoliticalExperience']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidatePoliticalExperience['CandidatePoliticalExperience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Political Experiences', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Political Experience', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
