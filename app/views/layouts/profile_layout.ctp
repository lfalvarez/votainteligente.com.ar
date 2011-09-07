<?php echo $this->element('header',array('css'=>array('nav','tooltip','profile','jquery.qtip'),'js'=>array('jquery.qtip')));//the file views/elements/header.ctp?>
<?php echo $this->element('profile_sidebar',array('candidates',$candidates));?>
    <div id="candidatesProfile">
	<?php echo $content_for_layout ?>
    </div>
<?php echo $this->element('footer');//the file views/elements/header.ctp?>