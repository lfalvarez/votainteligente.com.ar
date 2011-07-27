<div class="weights form">
<?php echo $this->Form->create('Weight');?>
	<fieldset>
		<legend><?php __('Admin Add Weight'); ?></legend>
		<script>
		    function updateValues(selected){
			$('#WeightAnswerId option').remove();
			$.post('<?php echo Router::url(array(
			    'controller'=>'answers',
			    'action'=>'getAnswersForThisQuestion'));
			?>/'+selected.value,
			function(data){
			    $('#WeightAnswerId').html(data);
			});
		    }
		</script>
	<?php
		echo $this->Form->input('question_id',array('empty'=>'Selecciona una pregunta','onChange'=>'updateValues(this);'));
		echo $this->Form->input('candidate_id');
		echo $this->Form->input('answer_id',array('empty'=>'Selecciona una pregunta'));
		Configure::load('medianaranja');
		echo $this->Form->input('weighting',array('type'=>'select','default'=>1,'options'=>Configure::read('Weights.possibleValues')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Weights', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates', true), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate', true), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
	</ul>
</div>