<div class="candidateProfiles view">
<h2><?php  __('Candidate Profile');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Candidate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidateProfile['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $candidateProfile['Candidate']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birth'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['birth']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Profession'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['profession']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sons'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['sons']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Civil Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['civil_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Religion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['religion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Twitter'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['twitter']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Facebook'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['facebook']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Highschool'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['highschool']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assets'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['assets']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidateProfile['CandidateProfile']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidate Profile', true), array('action' => 'edit', $candidateProfile['CandidateProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Candidate Profile', true), array('action' => 'delete', $candidateProfile['CandidateProfile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateProfile['CandidateProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Candidate Links');?></h3>
	<?php if (!empty($candidateProfile['CandidateLink'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Candidate Profile Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Link'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidateProfile['CandidateLink'] as $candidateLink):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $candidateLink['id'];?></td>
			<td><?php echo $candidateLink['candidate_profile_id'];?></td>
			<td><?php echo $candidateLink['description'];?></td>
			<td><?php echo $candidateLink['link'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'candidate_links', 'action' => 'view', $candidateLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'candidate_links', 'action' => 'edit', $candidateLink['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'candidate_links', 'action' => 'delete', $candidateLink['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Candidate Link', true), array('controller' => 'candidate_links', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Candidate Parties');?></h3>
	<?php if (!empty($candidateProfile['CandidateParty'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Candidate Profile Id'); ?></th>
		<th><?php __('Starting Year'); ?></th>
		<th><?php __('Ending Year'); ?></th>
		<th><?php __('Party'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidateProfile['CandidateParty'] as $candidateParty):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $candidateParty['id'];?></td>
			<td><?php echo $candidateParty['candidate_profile_id'];?></td>
			<td><?php echo $candidateParty['starting_year'];?></td>
			<td><?php echo $candidateParty['ending_year'];?></td>
			<td><?php echo $candidateParty['party'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'candidate_parties', 'action' => 'view', $candidateParty['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'candidate_parties', 'action' => 'edit', $candidateParty['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'candidate_parties', 'action' => 'delete', $candidateParty['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateParty['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Candidate Party', true), array('controller' => 'candidate_parties', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Candidate Political Experiences');?></h3>
	<?php if (!empty($candidateProfile['CandidatePoliticalExperience'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Candidate Profile Id'); ?></th>
		<th><?php __('Starting Year'); ?></th>
		<th><?php __('Ending Year'); ?></th>
		<th><?php __('Position'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidateProfile['CandidatePoliticalExperience'] as $candidatePoliticalExperience):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $candidatePoliticalExperience['id'];?></td>
			<td><?php echo $candidatePoliticalExperience['candidate_profile_id'];?></td>
			<td><?php echo $candidatePoliticalExperience['starting_year'];?></td>
			<td><?php echo $candidatePoliticalExperience['ending_year'];?></td>
			<td><?php echo $candidatePoliticalExperience['position'];?></td>
			<td><?php echo $candidatePoliticalExperience['type'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'candidate_political_experiences', 'action' => 'view', $candidatePoliticalExperience['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'candidate_political_experiences', 'action' => 'edit', $candidatePoliticalExperience['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'candidate_political_experiences', 'action' => 'delete', $candidatePoliticalExperience['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidatePoliticalExperience['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Candidate Political Experience', true), array('controller' => 'candidate_political_experiences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Candidate University Studies');?></h3>
	<?php if (!empty($candidateProfile['CandidateUniversityStudy'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Candidate Profile Id'); ?></th>
		<th><?php __('Career'); ?></th>
		<th><?php __('University'); ?></th>
		<th><?php __('Ending Year'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidateProfile['CandidateUniversityStudy'] as $candidateUniversityStudy):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $candidateUniversityStudy['id'];?></td>
			<td><?php echo $candidateUniversityStudy['candidate_profile_id'];?></td>
			<td><?php echo $candidateUniversityStudy['career'];?></td>
			<td><?php echo $candidateUniversityStudy['university'];?></td>
			<td><?php echo $candidateUniversityStudy['ending_year'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'candidate_university_studies', 'action' => 'view', $candidateUniversityStudy['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'candidate_university_studies', 'action' => 'edit', $candidateUniversityStudy['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'candidate_university_studies', 'action' => 'delete', $candidateUniversityStudy['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateUniversityStudy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Candidate University Study', true), array('controller' => 'candidate_university_studies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Candidate Work Experiences');?></h3>
	<?php if (!empty($candidateProfile['CandidateWorkExperience'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Candidate Profile Id'); ?></th>
		<th><?php __('Starting Year'); ?></th>
		<th><?php __('Ending Year'); ?></th>
		<th><?php __('Position'); ?></th>
		<th><?php __('Company'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidateProfile['CandidateWorkExperience'] as $candidateWorkExperience):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $candidateWorkExperience['id'];?></td>
			<td><?php echo $candidateWorkExperience['candidate_profile_id'];?></td>
			<td><?php echo $candidateWorkExperience['starting_year'];?></td>
			<td><?php echo $candidateWorkExperience['ending_year'];?></td>
			<td><?php echo $candidateWorkExperience['position'];?></td>
			<td><?php echo $candidateWorkExperience['company'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'candidate_work_experiences', 'action' => 'view', $candidateWorkExperience['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'candidate_work_experiences', 'action' => 'edit', $candidateWorkExperience['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'candidate_work_experiences', 'action' => 'delete', $candidateWorkExperience['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidateWorkExperience['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Candidate Work Experience', true), array('controller' => 'candidate_work_experiences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
