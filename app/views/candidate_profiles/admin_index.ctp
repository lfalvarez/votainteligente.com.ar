<div class="candidateProfiles index">
	<h2><?php __('Candidate Profiles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('candidate_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('birth');?></th>
			<th><?php echo $this->Paginator->sort('profession');?></th>
			<th><?php echo $this->Paginator->sort('sons');?></th>
			<th><?php echo $this->Paginator->sort('civil_status');?></th>
			<th><?php echo $this->Paginator->sort('religion');?></th>
			<th><?php echo $this->Paginator->sort('twitter');?></th>
			<th><?php echo $this->Paginator->sort('facebook');?></th>
			<th><?php echo $this->Paginator->sort('highschool');?></th>
			<th><?php echo $this->Paginator->sort('assets');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($candidateProfiles as $candidateProfile):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $candidateProfile['CandidateProfile']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidateProfile['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $candidateProfile['Candidate']['id'])); ?>
		</td>
		<td><?php echo $candidateProfile['CandidateProfile']['name']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['birth']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['profession']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['sons']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['civil_status']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['religion']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['twitter']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['facebook']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['highschool']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['assets']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['created']; ?>&nbsp;</td>
		<td><?php echo $candidateProfile['CandidateProfile']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $candidateProfile['CandidateProfile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $candidateProfile['CandidateProfile']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $candidateProfile['CandidateProfile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateProfile['CandidateProfile']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('action' => 'add')); ?></li>
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