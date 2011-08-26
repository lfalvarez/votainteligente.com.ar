<div class="sourceOfAnswers form">
<script>
    function selectCandidate(candidate_id){

	$.post('<?php echo Router::url(array(
			    'controller'=>'source_of_answers',
			    'action'=>'getQuestionsForCandidate'));
			?>/'+candidate_id,function(data) {
	    $('#questionsForCandidate').html(data);
	    $('#answersForQuestion option').text('Selecciona una pregunta');
	});

    }
    function selectQuestion(question_id){
	var candidate_id = $('#candidateSelector').val();

	$.post('<?php echo Router::url(array(
			    'controller'=>'source_of_answers',
			    'action'=>'getWeightsForCandidateAndQuestion'));
			?>/'+candidate_id+'/'+question_id,function(data){
	    $('#answersForQuestion').html(data);
	});
    }
</script>
<?php echo $this->Form->create('SourceOfAnswer');?>
	<fieldset>
		<legend><?php __('Admin Edit Source Of Answer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('candidate_id',array(
		    'type'=>'select',
		    'options'=>$candidates,
		    'selected'=>$this->data['Weight']['candidate_id'],
		    'empty'=>'Selecciona un candidato',
		    'id'=>'candidateSelector',
		    'onchange'=>'selectCandidate(this.value);',
		    'label'=>'Candidato'
		    ));
		echo $this->Form->input('question_id',array(
			'type'=>'select',
			'empty'=>'Selecciona un candidato',
			'options'=>$questions,
			'selected'=>$this->data['Weight']['question_id'],
			'id'=>'questionsForCandidate',
			'onchange'=>'selectQuestion(this.value);',
			'label'=>'Pregunta'
		    ));
		echo $this->Form->input('weight_id',array(
		    'id'=>'answersForQuestion',
		    'label'=>'Respuesta',
		    'empty'=>'Selecciona una respuesta'
		));
		echo $this->Form->input('sentence',array('label'=>'Frase'));
		echo $this->Form->input('media_name',array('label'=>'Nombre del medio'));
		echo $this->Form->input('link',array('label'=>'Link (recuerda anteponer http://)'));
		echo $this->Form->input('date',array('label'=>'Fecha'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SourceOfAnswer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SourceOfAnswer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index','controller'=>'candidates'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index','controller'=>'questions'));?></li>
		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index','controller'=>'source_of_answers'));?></li>
	</ul>
</div>