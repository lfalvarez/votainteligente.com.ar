<div class="candidateUniversityStudies index">
	<h2><?php __('Candidate University Studies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('candidate_profile_id');?></th>
			<th><?php echo $this->Paginator->sort('career');?></th>
			<th><?php echo $this->Paginator->sort('university');?></th>
			<th><?php echo $this->Paginator->sort('ending_year');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($candidateUniversityStudies as $candidateUniversityStudy):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $candidateUniversityStudy['CandidateUniversityStudy']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidateUniversityStudy['CandidateProfile']['name'], array('controller' => 'candidate_profiles', 'action' => 'view', $candidateUniversityStudy['CandidateProfile']['id'])); ?>
		</td>
		<td><?php echo $candidateUniversityStudy['CandidateUniversityStudy']['career']; ?>&nbsp;</td>
		<td><?php echo $candidateUniversityStudy['CandidateUniversityStudy']['university']; ?>&nbsp;</td>
		<td><?php echo $candidateUniversityStudy['CandidateUniversityStudy']['ending_year']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $candidateUniversityStudy['CandidateUniversityStudy']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $candidateUniversityStudy['CandidateUniversityStudy']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $candidateUniversityStudy['CandidateUniversityStudy']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateUniversityStudy['CandidateUniversityStudy']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Candidate University Study', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>