<div class="sourceOfAnswers form">
<?php echo $this->Form->create('SourceOfAnswer');?>
	<fieldset>
		<legend><?php __('Admin Add Source Of Answer'); ?></legend>
	<?php
		echo $this->Form->select('Ponderación',$weights,array('empty'=>'Selecciona una respuesta de candidato'));
		echo $this->Form->input('sentence');
		echo $this->Form->input('media_name');
		echo $this->Form->input('link');
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