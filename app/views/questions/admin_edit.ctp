<?php echo $this->Html->script('category-in-a-dialog'); ?>
<?php echo $this->Html->script('replicator'); ?>
<?php echo $this->Html->script('consistency-checker'); ?>
<div class="questions form">
<?php echo $this->Form->create('Question');?>
	<fieldset>
		<legend><?php __('Admin Edit Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question',array('label'=>'Pregunta'));
		echo $this->Form->input('explanation',array('label'=>'Explicación'));
		echo $this->Form->input('short_description',array('label'=>'Descripción corta'));
		echo $this->Form->input('category_id',array('id'=>'idCategoryForNewQuestion','empty'=>'Selecciona una categoria','label'=>'Categoría'));
		echo $this->Html->link('Agregar otra categoria', '/admin/categories/add_ajax/', array('id' => 'addAnotherCategory'));
		echo $this->Form->input('public',array('checked'=>true,'label'=>'¿pública?'));
		echo $this->Form->input('included_in_media_naranja',array('type'=>'checkbox','label'=>'¿Incluida en la media naranja?','checked'=>true));
		echo $this->Form->input('order');
	?>
	</fieldset>
	<fieldset>
	    <legend>Respuestas para esta pregunta</legend>
	    <?php
			if (empty($this->data['Answer'])) {
			?>
			<fieldset Answers="0">
			    <legend>Nueva Respuesta</legend>
			    <?php
				echo $this->Form->input('Answers.0.Answer.answer',array('label'=>'Respuesta'));
			    ?>
			    <div class="input">
			    <?php
				$candidateCounter = 0;
				foreach ($candidates as $idCandidate => $candidate) {
				    $fieldName = 'Answers.0.Weight.'.$candidateCounter.'.candidate_id';
				    echo $this->Form->checkbox($fieldName,array('value'=>$idCandidate,'hiddenField' => false));
				    echo $this->Form->label($fieldName,$candidate);
				    $candidateCounter++;
				}
			    ?>
			    </div>
			</fieldset>
		    <?php
			}
			foreach ($this->data['Answer'] as $answer) {
			    ?>
			    <fieldset Answers="<?php echo $answer['id'];?>">
				<legend><?php echo $answer['answer'];?></legend>
				<?php
				    echo $this->Form->input('Answers.'.$answer['id'].'.Answer.id',array('type'=>'hidden','value'=>$answer['id']));
				    echo $this->Form->input('Answers.'.$answer['id'].'.Answer.answer',array('value'=>$answer['answer'],'label'=>'Respuesta'));
				    foreach ($answer['Weight'] as $weightCounter => $weight) {
					$fieldName = 'Answers.'.$answer['id'].'.Weight.'.$weightCounter;
					$optionsForCheckbox = array(
					    'value'=>$weight['candidate_id'],
					    'hiddenField' => false,
					    'checked'=>$weight['checked'],
					    'onClick'=>'ensureConsistency(this)'
					    );
					if ($weight['disabled']) {
					    $optionsForCheckbox['disabled'] = 'disabled';
					}
					echo $this->Form->checkbox($fieldName.'.candidate_id',$optionsForCheckbox);
					if (isset($weight['id'])) {
					    echo $this->Form->input($fieldName.'.id',array('type'=>'hidden','value'=>$weight['id']));
					}
					echo $this->Form->label($fieldName.'.candidate_id',$weight['candidate']);
				    }
				?>
				<a href="javascript:deleteARemoteElement('<?php echo Router::url(array(
				    'controller'=>'answers',
				    'action'=>'admin_delete_ajax',$answer['id']));
				?>', 'Answers', <?php echo $answer['id'];?>)">Eliminar</a>
			    </fieldset>
			    <?php
			}
		    ?>
	    <a onclick="addAnother('Answers','Nueva Respuesta');">+Añadir otra</a>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Question.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Question.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index','controller'=>'candidates'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index','controller'=>'questions'));?></li>
		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index','controller'=>'source_of_answers'));?></li>
	</ul>
</div>