<?php echo $this->Html->script('replicator'); ?>
<div class="candidates form">
<?php echo $this->Form->create('Candidate');?>
	<fieldset>
		<legend><?php __('Admin Add Candidate'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('imagepath',array('label'=>'Dirección a su imagen'));
	?>
		<fieldset>
		    <legend>Perfil del candidato</legend>
		    <?php
		    echo $this->Form->input('CandidateProfile.birth',array('minYear'=>1900,'label'=>'Fecha de nacimiento'));
		    echo $this->Form->input('CandidateProfile.profession',array('label'=>'Profesión'));
		    echo $this->Form->input('CandidateProfile.sons',array('label'=>'Cantidad de hijos'));
		    echo $this->Form->input('CandidateProfile.civil_status',array('label'=>'Estado Civil'));
		    echo $this->Form->input('CandidateProfile.religion',array('label'=>'Religión'));
		    echo $this->Form->input('CandidateProfile.twitter',array('label'=>'Link a Twitter'));
		    echo $this->Form->input('CandidateProfile.facebook',array('label'=>'Link a Facebook'));
		    echo $this->Form->input('CandidateProfile.highschool',array('label'=>'Escuela secundaria'));
		    echo $this->Form->input('CandidateProfile.current_party',array('label'=>'Partido político actual'));
		    echo $this->Form->input('CandidateProfile.assets',array('label'=>'Bienes'));
		    ?>
		</fieldset>
		<fieldset>
		    <legend>Links del candidato</legend>
		    <fieldset CandidateLink="0">
			<legend>Link</legend>
			<?php
			    echo $this->Form->input('CandidateLink.0.description',array('label'=>'Descripción'));
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
			echo $this->Form->input('CandidateParty.0.starting_year',array('label'=>'Año de inicio'));
			echo $this->Form->input('CandidateParty.0.ending_year',array('label'=>'Año de termino'));
			echo $this->Form->input('CandidateParty.0.party',array('label'=>'Partido'));
			?>
		    </fieldset>
		    <a onclick="addAnother('CandidateParty','Partido');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Experiencias Politicas</legend>
		    <fieldset CandidatePoliticalExperience="0">
			<legend>Experiencia Política</legend>
			<?php
			    echo $this->Form->input('CandidatePoliticalExperience.0.starting_year',array('label'=>'Año de inicio'));
			    echo $this->Form->input('CandidatePoliticalExperience.0.ending_year',array('label'=>'Año de termino'));
			    echo $this->Form->input('CandidatePoliticalExperience.0.position',array('label'=>'Posicion'));
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
			    echo $this->Form->input('CandidateUniversityStudy.0.career',array('label'=>'Carrera'));
			    echo $this->Form->input('CandidateUniversityStudy.0.university',array('label'=>'Universidad'));
			    echo $this->Form->input('CandidateUniversityStudy.0.ending_year',array('label'=>'Año de finalización'));
			?>
		    </fieldset>
		    <a onclick="addAnother('CandidateUniversityStudy','Estudio Universitario');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Experiencias laborales</legend>
		    <fieldset CandidateWorkExperience="0">
			<legend>Experiencia Laboral</legend>
			<?php
			    echo $this->Form->input('CandidateWorkExperience.0.starting_year',array('label'=>'Año de inicio'));
			    echo $this->Form->input('CandidateWorkExperience.0.ending_year',array('label'=>'Año de termino'));
			    echo $this->Form->input('CandidateWorkExperience.0.position',array('label'=>'Posición'));
			    echo $this->Form->input('CandidateWorkExperience.0.company',array('label'=>'Organización'));
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

		<li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index','controller'=>'candidates'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index','controller'=>'questions'));?></li>
		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index','controller'=>'source_of_answers'));?></li>
	</ul>
</div>