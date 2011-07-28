<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	</title>
	<?php

		echo $scripts_for_layout;
	?>
	<?php echo $this->Html->script('jquery'); ?>
</head>
<body>
    Ver los perfiles de los candidatos:
    <ul>
    <?php
    foreach( $candidates as $candidate ){
	echo '<li>'.$this->Html->link($candidate['Candidate']['name'],array('controller'=>'profiles','action'=>'view',$candidate['Candidate']['slug'])).'</li>';
    }
    ?>
    </ul>
    <div id="candidatesProfile">
	<?php echo $content_for_layout ?>
    </div>
</body>
</html>