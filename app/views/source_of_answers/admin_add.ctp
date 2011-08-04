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
		<legend><?php __('Admin Add Source Of Answer'); ?></legend>
	<?php
		echo $this->Form->input('candidate_id',array(
		    'type'=>'select',
		    'options'=>$candidates,
		    'empty'=>'Selecciona un candidato',
		    'id'=>'candidateSelector',
		    'onchange'=>'selectCandidate(this.value);',
		    'label'=>'Candidato'
		    ));
		echo $this->Form->input('question_id',array(
			'type'=>'select',
			'empty'=>'Selecciona un candidato',
			'id'=>'questionsForCandidate',
			'onchange'=>'selectQuestion(this.value);',
			'label'=>'Pregunta'
		    ));
		echo $this->Form->input('weight_id',array(
		    'type'=>'select',
		    'empty'=>'Selecciona un candidato',
		    'id'=>'answersForQuestion',
		    'label'=>'Respuesta'
		));
		echo $this->Form->input('sentence');
		echo $this->Form->input('media_name');
		echo $this->Form->input('link');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>