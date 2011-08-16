<script>
    $(document).ready(function() {
	$('#addCategoryAjax').ajaxForm({
	    success:function(data) {
		    closeDialog(data);
		},
	    resetForm:true
	});
    });
</script>
<div class="categories form" style="float:left !important;">
<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create('Category',array('id'=>'addCategoryAjax'));?>
	<fieldset>
		<legend><?php __('Admin Add Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('sort',array('value'=>$maxOrder));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>