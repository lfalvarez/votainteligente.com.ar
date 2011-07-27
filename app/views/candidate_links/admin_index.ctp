<div class="candidateLinks index">
	<h2><?php __('Candidate Links');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('candidate_profile_id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('link');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($candidateLinks as $candidateLink):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $candidateLink['CandidateLink']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidateLink['CandidateProfile']['name'], array('controller' => 'candidate_profiles', 'action' => 'view', $candidateLink['CandidateProfile']['id'])); ?>
		</td>
		<td><?php echo $candidateLink['CandidateLink']['description']; ?>&nbsp;</td>
		<td><?php echo $candidateLink['CandidateLink']['link']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $candidateLink['CandidateLink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $candidateLink['CandidateLink']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $candidateLink['CandidateLink']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateLink['CandidateLink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Candidate Link', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>