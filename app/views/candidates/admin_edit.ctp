<?php echo $this->Html->script('replicator'); ?>
<div class="candidates form">
<?php echo $this->Form->create('Candidate');?>
	<fieldset>
		<legend><?php __('Admin Edit Candidate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('imagepath',array('label'=>'Dirección a su imagen'));

	?>
		<fieldset>
		    <legend>Perfil del candidato</legend>
		    <?php
		    echo $this->Form->input('CandidateProfile.id');
		    echo $this->Form->input('CandidateProfile.birth',array('minYear'=>1900, 'label'=>'Fecha de nacimiento'));
		    echo $this->Form->input('CandidateProfile.profession',array('label'=>'Profesión'));
		    echo $this->Form->input('CandidateProfile.sons',array('label'=>'Cantidad de hijos'));
		    echo $this->Form->input('CandidateProfile.civil_status',array('label'=>'Estado civil'));
		    echo $this->Form->input('CandidateProfile.religion',array('label'=>'Religión'));
		    echo $this->Form->input('CandidateProfile.twitter',array('label'=>'Link a su twitter'));
		    echo $this->Form->input('CandidateProfile.facebook',array('label'=>'Link a su facebook'));
		    echo $this->Form->input('CandidateProfile.highschool',array('label'=>'Escuela secundaria'));
		    echo $this->Form->input('CandidateProfile.current_party',array('label'=>'Partido político actual'));
		    echo $this->Form->input('CandidateProfile.assets',array('label'=>'Bienes'));
		    ?>
		</fieldset>
		<fieldset>
		    <legend>Links del candidato</legend>
		    <?php
			if (empty($this->data['CandidateLink'])) {
			?>
			<fieldset CandidateLink="0">
			    <legend>Link</legend>
			    <?php
				echo $this->Form->input('CandidateLink.0.description',array('label'=>'Descripción'));
				echo $this->Form->input('CandidateLink.0.link',array('label'=>'Link (recuerda anteponer http://)'));
			    ?>
			</fieldset>
		    <?php
			}
			foreach ($this->data['CandidateLink'] as $link) {
			    ?>
			    <fieldset CandidateLink="<?php echo $link['id'];?>">
				<legend><?php echo $link['description'];?></legend>
				<?php
				    echo $this->Form->input('CandidateLink.'.$link['id'].'.id',array('value'=>$link['id']));
				    echo $this->Form->input('CandidateLink.'.$link['id'].'.description',array('value'=>$link['description'],'label'=>'Descripción'));
				    echo $this->Form->input('CandidateLink.'.$link['id'].'.link',array('value'=>$link['link'],'label'=>'Link (recuerda anteponer http://)'));
				?>
			    </fieldset>
			    <?php
			}
		    ?>
		    <a onclick="addAnother('CandidateLink','Link');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Partidos a los que ha pertenecido</legend>
		    <?php
			if (empty($this->data['CandidateParty'])) {
			?>
			<fieldset CandidateParty="0">
			    <legend>Partido</legend>
			    <?php
			    echo $this->Form->input('CandidateParty.0.starting_year',array('label'=>'Año de inicio'));
			    echo $this->Form->input('CandidateParty.0.ending_year',array('label'=>'Año de termino'));
			    echo $this->Form->input('CandidateParty.0.party',array('label'=>'Partido'));
			    ?>
			</fieldset>
		    <?php
			}
			foreach ($this->data['CandidateParty'] as $party) {
		    ?>
		    <fieldset CandidateParty="<?php echo $party['id'];?>">
			<legend><?php echo $party['party'];?></legend>
			<?php
			echo $this->Form->input('CandidateParty.'.$party['id'].'.id',array('value'=>$party['id']));
			echo $this->Form->input('CandidateParty.'.$party['id'].'.starting_year',array('value'=>$party['starting_year'],'label'=>'Año de inicio'));
			echo $this->Form->input('CandidateParty.'.$party['id'].'.ending_year',array('value'=>$party['ending_year'],'label'=>'Año de termino'));
			echo $this->Form->input('CandidateParty.'.$party['id'].'.party',array('value'=>$party['party'],'label'=>'Partido político'));
			?>
		    </fieldset>
		    <?php
		    }
		    ?>
		    <a onclick="addAnother('CandidateParty','Partido');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Experiencias Politicas</legend>
		    <?php
			if (empty($this->data['CandidatePoliticalExperience'])) {
			?>
			<fieldset CandidatePoliticalExperience="0">
			    <legend>Experiencia Política</legend>
			    <?php
				echo $this->Form->input('CandidatePoliticalExperience.0.starting_year',array('label'=>'Año de inicio'));
				echo $this->Form->input('CandidatePoliticalExperience.0.ending_year',array('label'=>'Año de termino'));
				echo $this->Form->input('CandidatePoliticalExperience.0.position',array('label'=>'Posición'));
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
		    <?php
			}
			foreach ($this->data['CandidatePoliticalExperience'] as $experience) {
		    ?>
		    <fieldset CandidatePoliticalExperience="<?php echo $experience['id'];?>">
			<legend><?php echo $experience['position'];?></legend>
			<?php
			    echo $this->Form->input('CandidatePoliticalExperience.'.$experience['id'].'.id',array('value'=>$experience['id']));
			    echo $this->Form->input('CandidatePoliticalExperience.'.$experience['id'].'.starting_year',array('value'=>$experience['starting_year'],'label'=>'Año de inicio'));
			    echo $this->Form->input('CandidatePoliticalExperience.'.$experience['id'].'.ending_year',array('value'=>$experience['ending_year'],'label'=>'Año de termino'));
			    echo $this->Form->input('CandidatePoliticalExperience.'.$experience['id'].'.position',array('value'=>$experience['position'],'label'=>'Posición'));
			    echo $this->Form->input('CandidatePoliticalExperience.'.$experience['id'].'.type',
				    array(
					'type'=>'select',
					'options'=>$politicalExperienceTypes,
					'selected'=>null,
					'value'=>$experience['type'],
					'empty'=>'Selecciona un tipo',
					'label'=>'Tipo'
				    ));
			?>
		    </fieldset>
		    <?php
			}
		    ?>
		    <a onclick="addAnother('CandidatePoliticalExperience','Experiencia política');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Estudios Universitarios</legend>
		    <?php
			if (empty($this->data['CandidateUniversityStudy'])) {
			?>
			<fieldset CandidateUniversityStudy="0">
			    <legend>Estudio Universitario</legend>
			    <?php
				echo $this->Form->input('CandidateUniversityStudy.0.career',array('label'=>'Carrera'));
				echo $this->Form->input('CandidateUniversityStudy.0.university',array('label'=>'Universidad'));
				echo $this->Form->input('CandidateUniversityStudy.0.ending_year',array('label'=>'Año de termino'));
			    ?>
			</fieldset>
			<?php
			}
			foreach ($this->data['CandidateUniversityStudy'] as $study) {
		    ?>
			<fieldset CandidateUniversityStudy="<?php echo $study['id'];?>">
			    <legend><?php echo $study['career'];?></legend>
			    <?php
				echo $this->Form->input('CandidateUniversityStudy.'.$study['id'].'.id',array('value'=>$study['id']));
				echo $this->Form->input('CandidateUniversityStudy.'.$study['id'].'.career',array('value'=>$study['career'],'label'=>'Carrera'));
				echo $this->Form->input('CandidateUniversityStudy.'.$study['id'].'.university',array('value'=>$study['university'],'label'=>'Universidad'));
				echo $this->Form->input('CandidateUniversityStudy.'.$study['id'].'.ending_year',array('value'=>$study['ending_year'],'label'=>'Año de finalización'));
			    ?>
			</fieldset>
		    <?php
			}
		    ?>
		    <a onclick="addAnother('CandidateUniversityStudy','Estudio universitario');">+Añadir otro</a>
		</fieldset>
		<fieldset>
		    <legend>Experiencias laborales</legend>
		    <?php
			if (empty($this->data['CandidateWorkExperience'])) {
			    ?>
			    <fieldset CandidateWorkExperience="0">
				<legend>Experiencia Laboral</legend>
				<?php
				    echo $this->Form->input('CandidateWorkExperience.0.starting_year',array('label'=>'Año de inicio'));
				    echo $this->Form->input('CandidateWorkExperience.0.ending_year',array('label'=>'Año de termino'));
				    echo $this->Form->input('CandidateWorkExperience.0.position',array('label'=>'Posición'));
				    echo $this->Form->input('CandidateWorkExperience.0.company',array('label'=>'Organización'));
				?>
			    </fieldset>
			    <?php
			}
			foreach ($this->data['CandidateWorkExperience'] as $experience) {
		    ?>
			<fieldset CandidateWorkExperience="<?php echo $experience['id'];?>">
			    <legend><?php echo $experience['company'];?></legend>
			    <?php
				echo $this->Form->input('CandidateWorkExperience.'.$experience['id'].'.id',array('value'=>$experience['id']));
				echo $this->Form->input('CandidateWorkExperience.'.$experience['id'].'.starting_year',array('value'=>$experience['starting_year'],'label'=>'Año de inicio'));
				echo $this->Form->input('CandidateWorkExperience.'.$experience['id'].'.ending_year',array('value'=>$experience['ending_year'],'label'=>'Año de termino'));
				echo $this->Form->input('CandidateWorkExperience.'.$experience['id'].'.position',array('value'=>$experience['position'],'label'=>'Posición'));
				echo $this->Form->input('CandidateWorkExperience.'.$experience['id'].'.company',array('value'=>$experience['company'],'label'=>'Organización'));
			    ?>
			</fieldset>
		    <?php
			}
		    ?>
		    <a onclick="addAnother('CandidateWorkExperience','Experiencia Laboral');">+Añadir otro</a>
		</fieldset>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Candidate.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Candidate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index','controller'=>'candidates'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index','controller'=>'questions'));?></li>
		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index','controller'=>'source_of_answers'));?></li>
	</ul>
</div>