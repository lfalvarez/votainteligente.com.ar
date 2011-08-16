<?php echo $this->Html->script('category-in-a-dialog'); ?>
<div class="questions form">
<?php echo $this->Form->create('Question');?>
	<fieldset>
		<legend><?php __('Admin Add Question'); ?></legend>
	<?php
		echo $this->Form->input('question');
		echo $this->Form->input('explanation');
		echo $this->Form->input('short_description');
		echo $this->Form->input('category_id',array('id'=>'idCategoryForNewQuestion','empty'=>'Selecciona una categoria','value'=>$selectedCategoryId));
		echo $this->Html->link('Agregar otra categoria', '/admin/categories/add_ajax/', array('id' => 'addAnotherCategory'));
		echo $this->Form->input('sour');
		echo $this->Form->input('public',array('checked'=>true));
		echo $this->Form->input('included_in_media_naranja',array('checked'=>true));
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weights', true), array('controller' => 'weights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weight', true), array('controller' => 'weights', 'action' => 'add')); ?> </li>
	</ul>
</div>