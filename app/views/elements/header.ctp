<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <?php echo $this->Html->charset(); ?>
    <title>Vota Inteligente <?php
    if ($this->getVar('title_for_layout')) {
	echo ' - ';
	echo $this->getVar('title_for_layout');
    }
    ?></title>
    <?php echo $this->Html->script('jquery'); ?>
    <?php
    foreach ($js as $javascript) {
	echo $this->Html->script($javascript);
    }
    foreach ($css as $styleSheet) {
	echo $this->Html->css($styleSheet);
    }

    echo $this->getVar('scripts_for_layout');
    ?>

    <!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body class="no-js">
    <h1>Vota inteligente</h1>