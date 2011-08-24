<?php echo $this->Html->script('replicator'); ?>
<div class="candidates form">
<?php echo $this->Form->create('Candidate');?>
	<fieldset>
		<legend><?php __('Admin Add Candidate'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('imagepath');
	?>
		<fieldset>
		    <legend>Perfil del candidato</legend>
		    <?php
		    echo $this->Form->input('CandidateProfile.birth',array('minYear'=>1900));
		    echo $this->Form->input('CandidateProfile.profession');
		    echo $this->Form->input('CandidateProfile.sons');
		    echo $this->Form->input('CandidateProfile.civil_status');
		    echo $this->Form->input('CandidateProfile.religion');
		    echo $this->Form->input('CandidateProfile.twitter');
		    echo $this->Form->input('CandidateProfile.facebook');
		    echo $this->Form->input('CandidateProfile.highschool');
		    echo $this->Form->input('CandidateProfile.current_party');
		    echo $this->Form->input('CandidateProfile.assets');
		    ?>
		</fieldset>
		<fieldset>
		    <legend>Links del candidato</legend>
		    <fieldset CandidateLink="0">
			<legend>Link</legend>
			<?php
			    echo $this->Form->input('CandidateLink.0.description');
			    echo $this->Form->input('CandidateLink.0.link',array('label'=>'Link (recuerda anteponer http://)'));
			?>
		    </fieldset>
		    <a onclick="addAnother('CandidateLink','Link');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Partidos a los que ha pertenecido</legend>
		    <fieldset CandidateParty="0">
			<legend>Partido</legend>
			<?php
			echo $this->Form->input('CandidateParty.0.starting_year');
			echo $this->Form->input('CandidateParty.0.ending_year');
			echo $this->Form->input('CandidateParty.0.party');
			?>
		    </fieldset>
		    <a onclick="addAnother('CandidateParty','Partido');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Experiencias Politicas</legend>
		    <fieldset CandidatePoliticalExperience="0">
			<legend>Experiencia Política</legend>
			<?php
			    echo $this->Form->input('CandidatePoliticalExperience.0.starting_year');
			    echo $this->Form->input('CandidatePoliticalExperience.0.ending_year');
			    echo $this->Form->input('CandidatePoliticalExperience.0.position');
			    echo $this->Form->input('CandidatePoliticalExperience.0.type',
				    array(
					'type'=>'select',
					'options'=>$politicalExperienceTypes,
					'selected'=>null,
					'empty'=>'Selecciona un tipo',
					'label'=>'Tipo'
				    ));
			?>
		    </fieldset>
		    <a onclick="addAnother('CandidatePoliticalExperience','Experiencia Política');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Estudios Universitarios</legend>
		    <fieldset CandidateUniversityStudy="0">
			<legend>Estudio Universitario</legend>
			<?php
			    echo $this->Form->input('CandidateUniversityStudy.0.career');
			    echo $this->Form->input('CandidateUniversityStudy.0.university');
			    echo $this->Form->input('CandidateUniversityStudy.0.ending_year');
			?>
		    </fieldset>
		    <a onclick="addAnother('CandidateUniversityStudy','Estudio Universitario');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Experiencias laborales</legend>
		    <fieldset CandidateWorkExperience="0">
			<legend>Experiencia Laboral</legend>
			<?php
			    echo $this->Form->input('CandidateWorkExperience.0.starting_year');
			    echo $this->Form->input('CandidateWorkExperience.0.ending_year');
			    echo $this->Form->input('CandidateWorkExperience.0.position');
			    echo $this->Form->input('CandidateWorkExperience.0.company');
			?>
		    </fieldset>
		    <a onclick="addAnother('CandidateWorkExperience','Experiencia Laboral');">+Añadir otro</a>
		</fieldset>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Candidate Profiles', true), array('controller' => 'candidate_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate Profile', true), array('controller' => 'candidate_profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>