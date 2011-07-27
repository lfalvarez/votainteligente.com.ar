<?php echo $this->Html->script('jquery'); ?>
<script>
    $(document).ready(function(){
	$('.linkToCandidate').click(function(event){
	    event.preventDefault();
	    var profileAddress= event.target.href;
	    $.get (profileAddress, function (data)
	    {
		$('#candidatesProfile').html(data);
	    });
	});
	
    });
</script>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
Ver los perfiles de los candidatos:
<ul>
<?php
foreach( $candidates as $candidate ){
    echo '<li> <a class="linkToCandidate" href="profiles/'.$candidate['Candidate']['slug'].'">'.$candidate['Candidate']['name'] .'</a></li>';
}
?>
</ul>

<div id="candidatesProfile"></div>