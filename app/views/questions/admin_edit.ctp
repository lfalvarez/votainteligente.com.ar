<?php echo $this->Html->script('category-in-a-dialog'); ?>
<?php echo $this->Html->script('replicator'); ?>
<div class="questions form">
<?php echo $this->Form->create('Question');?>
	<fieldset>
		<legend><?php __('Admin Edit Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question');
		echo $this->Form->input('explanation');
		echo $this->Form->input('short_description');
		echo $this->Form->input('category_id',array('id'=>'idCategoryForNewQuestion','empty'=>'Selecciona una categoria'));
		echo $this->Html->link('Agregar otra categoria', '/admin/categories/add_ajax/', array('id' => 'addAnotherCategory'));
		echo $this->Form->input('sour');
		echo $this->Form->input('public',array('checked'=>true));
		echo $this->Form->input('included_in_media_naranja',array('checked'=>true));
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
				echo $this->Form->input('Answers.0.Answer.answer');
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
				    echo $this->Form->input('Answers.'.$answer['id'].'.Answer.answer',array('value'=>$answer['answer']));
				    foreach ($answer['Weight'] as $weightCounter => $weight) {
					$fieldName = 'Answers.'.$answer['id'].'.Weight.'.$weightCounter;
					if (isset($weight['id'])) {
					    echo $this->Form->input($fieldName.'.id',array('type'=>'hidden','value'=>$weight['id']));
					}
					echo $this->Form->checkbox($fieldName.'.candidate_id',array('value'=>$weight['candidate_id'],'hiddenField' => false,'checked'=>$weight['checked']));
					echo $this->Form->label($fieldName.'.candidate_id',$weight['candidate']);
				    }
				?>
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
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>