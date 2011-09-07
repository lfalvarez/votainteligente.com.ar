<div>
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
</div>
