<div class="candidateWorkExperiences index">
	<h2><?php __('Candidate Work Experiences');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('candidate_profile_id');?></th>
			<th><?php echo $this->Paginator->sort('year');?></th>
			<th><?php echo $this->Paginator->sort('position');?></th>
			<th><?php echo $this->Paginator->sort('company');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($candidateWorkExperiences as $candidateWorkExperience):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $candidateWorkExperience['CandidateWorkExperience']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidateWorkExperience['CandidateProfile']['id'], array('controller' => 'candidate_profiles', 'action' => 'view', $candidateWorkExperience['CandidateProfile']['id'])); ?>
		</td>
		<td><?php echo $candidateWorkExperience['CandidateWorkExperience']['year']; ?>&nbsp;</td>
		<td><?php echo $candidateWorkExperience['CandidateWorkExperience']['position']; ?>&nbsp;</td>
		<td><?php echo $candidateWorkExperience['CandidateWorkExperience']['company']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $candidateWorkExperience['CandidateWorkExperience']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $candidateWorkExperience['CandidateWorkExperience']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $candidateWorkExperience['CandidateWorkExperience']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateWorkExperience['CandidateWorkExperience']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Candidate Work Experience', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>