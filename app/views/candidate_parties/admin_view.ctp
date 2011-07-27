<div class="candidateParties view">
<h2><?php  __('Candidate Party');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateParty['CandidateParty']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Candidate Profile'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidateParty['CandidateProfile']['id'], array('controller' => 'candidate_profiles', 'action' => 'view', $candidateParty['CandidateProfile']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Starting Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateParty['CandidateParty']['starting_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ending Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateParty['CandidateParty']['ending_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Party'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateParty['CandidateParty']['party']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate Party', true), array('action' => 'edit', $candidateParty['CandidateParty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Candidate Party', true), array('action' => 'delete', $candidateParty['CandidateParty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateParty['CandidateParty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Parties', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Party', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
