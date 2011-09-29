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
    <title><?php echo $title; ?></title>
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
    <?php
    if (isset($facebookShareImage)) {
    ?>
    <meta property="og:image" content="<?php echo $facebookShareImage; ?>" />
    <?php
    }
    ?>

</head>
<body class="no-js">
	<div>
        <header id="mainHeader" class="wrapBasic">
            <a href="<?php echo Router::url('/');?>"><img class="isotipo" src="<?php echo Router::url('/img/isotipo_vi.png');?>" />
            <img class="logotipo" src="<?php echo Router::url('/img/logotipo_vi.png');?>" />
            </a>

            <h1 style="display: none;">Vota inteligente</h1>
        </header>
        <nav id="mainNavigation">
        	<div class="wrapBasic">
                <ul >
                    <li> <a href="<?php Configure::load('facebook');echo Router::url(Configure::read('Facebook.APP_URL'));?>" target="_blank">MEDIA NARANJA</a></li>
                    <li> <a href="<?php echo Router::url("/profiles/");?>">PERFILES</a></li>
                    <li> <a href="<?php echo Router::url(array('controller'=>'compare','action'=>'/'));?>">COMPARAR</a></li>
                </ul>
            </div>
        </nav>
      </div>