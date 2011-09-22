<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <?php echo $this->Html->charset(); ?>
    <?php
    $title = 'Vota Inteligente ';
    $description = '';
    if ($this->getVar('title_for_layout')) {
	$title .= ' - ';
	$title .= $this->getVar('title_for_layout');
	$description = $this->getVar('title_for_layout');
    }
    ?>
    <title><?php $title; ?></title>
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
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $description;?>" />

</head>
<body class="no-js">
    <h1>Vota inteligente</h1>