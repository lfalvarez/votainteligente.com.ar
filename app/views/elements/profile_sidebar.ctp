<div id="sidebarLeft">
    <ul class="sidebarMenu">
	<?php
	
	foreach( $candidates as $candidate ){
	    echo '<li>'.$this->Html->link($this->Html->image($candidate['Candidate']['imagepath']).'<span>'.$candidate['Candidate']['name'].'</span>',array(
		'controller'=>'profiles',
		'action'=>'view',
		$candidate['Candidate']['slug']),array(
		'class'=>'link',
		'escape'=>false
		)).'</li>';
	}
	?>
    </ul>
</div>
