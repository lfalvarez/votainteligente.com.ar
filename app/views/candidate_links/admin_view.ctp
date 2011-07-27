<div class="candidateLinks view">
<h2><?php  __('Candidate Link');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateLink['CandidateLink']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Candidate Profile'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidateLink['CandidateProfile']['id'], array('controller' => 'candidate_profiles', 'action' => 'view', $candidateLink['CandidateProfile']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateLink['CandidateLink']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Link'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateLink['CandidateLink']['link']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate Link', true), array('action' => 'edit', $candidateLink['CandidateLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Candidate Link', true), array('action' => 'delete', $candidateLink['CandidateLink']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateLink['CandidateLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Links', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Link', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
