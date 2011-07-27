<div class="candidateUniversityStudies view">
<h2><?php  __('Candidate University Study');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateUniversityStudy['CandidateUniversityStudy']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Candidate Profile'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidateUniversityStudy['CandidateProfile']['id'], array('controller' => 'candidate_profiles', 'action' => 'view', $candidateUniversityStudy['CandidateProfile']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Career'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateUniversityStudy['CandidateUniversityStudy']['career']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('University'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateUniversityStudy['CandidateUniversityStudy']['university']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ending Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateUniversityStudy['CandidateUniversityStudy']['ending_year']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate University Study', true), array('action' => 'edit', $candidateUniversityStudy['CandidateUniversityStudy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Candidate University Study', true), array('action' => 'delete', $candidateUniversityStudy['CandidateUniversityStudy']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateUniversityStudy['CandidateUniversityStudy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate University Studies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate University Study', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
