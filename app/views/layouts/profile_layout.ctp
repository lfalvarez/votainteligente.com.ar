<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <?php echo $this->Html->charset(); ?>
    <title>Vota inteligente</title>
    <?php
	    echo $scripts_for_layout;
    ?>
    <?php echo $this->Html->script('jquery'); ?>
    <?php echo $this->Html->script('jquery.qtip'); ?>
    <!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        <?php echo $this->Html->css('nav'); ?>
	<?php echo $this->Html->css('tooltip'); ?>
	<?php echo $this->Html->css('profile'); ?>
	<?php echo $this->Html->css('jquery.qtip'); ?>
</head>
<body class="no-js">
    <h1>Vota inteligente</h1>
    <nav id="topNav">
    <ul>
    <?php
    foreach( $candidates as $candidate ){
	echo '<li>'.$this->Html->link($candidate['Candidate']['name'],array('controller'=>'profiles','action'=>'view',$candidate['Candidate']['slug'])).'</li>';
    }
    ?>
    </ul>
    </nav>
    <div id="candidatesProfile">
	<?php echo $content_for_layout ?>
    </div>
</body>
</html>