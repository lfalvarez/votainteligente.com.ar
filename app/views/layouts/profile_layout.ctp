<?php echo $this->element('header',array('css'=>array('nav','tooltip','profile','jquery.qtip'),'js'=>array('jquery.qtip')));//the file views/elements/header.ctp?>
    <nav id="topNav">
    <ul>
	<?php
	foreach( $candidates as $candidate ){
	    echo '<li>'.$this->Html->link($candidate['Candidate']['name'],array(
		'controller'=>'profiles',
		'action'=>'view',
		$candidate['Candidate']['slug'])).'</li>';
	}
	?>
    </ul>
    </nav>
    <div id="candidatesProfile">
	<?php echo $content_for_layout ?>
    </div>
<?php echo $this->element('footer');//the file views/elements/header.ctp?>