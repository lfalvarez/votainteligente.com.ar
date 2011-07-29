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
    <script>
    $(document).ready(function() {
	$('input[name=category]:radio').change(function(event){
		obtainCandidatesAndCategory();
	});
	$('select[name=firstCandidate]').change(function(event){
	    $('#errors li').remove();
	    var firstCandidate      = $('select[name=firstCandidate] option:checked').val();
	    if (firstCandidate<1){
		console.log();
		$('#errors').append('<li>Debes seleccionar el primer candidato</li>');
	    } else {
		obtainCandidatesAndCategory();
	    }
	});
	$('select[name=secondCandidate]').change(function(event){
	    $('#errors li').remove();
	    var secondCandidate     = $('select[name=secondCandidate] option:checked').val();
	    if (secondCandidate<1){
		$('#errors').append('<li>Debes seleccionar el segundo candidato</li>');
	    } else {
		obtainCandidatesAndCategory();
	    }

	});
    });
    function obtainCandidatesAndCategory(){
	var category            = $('input[name=category]:checked').val();
	var firstCandidate      = $('select[name=firstCandidate] option:selected').val();
	var secondCandidate     = $('select[name=secondCandidate] option:selected').val();
	var theSelectionIsRight = (firstCandidate>0) && (secondCandidate>0) && (category!=undefined) && firstCandidate != secondCandidate;
	if (theSelectionIsRight) {
	    $('#errors li').remove();
	    compareCandidates(firstCandidate,secondCandidate,category);
	} else {
	    manageErrors(firstCandidate,secondCandidate,category);
	}

    }
    function manageErrors(firstCandidate,secondCandidate,category){
	var errors = [];
	var candidatesAreEqual = secondCandidate>0 && firstCandidate>0 && secondCandidate==firstCandidate;
	if (candidatesAreEqual){
	    errors.push('Los dos candidatos son iguales');
	}
	$('#errors li').remove();
	for(var i=0;i<errors.length;i++){
	    $('#errors').append('<li>'+errors[i]+'</li>');
	}
    }
    function compareCandidates(firstCandidate,secondCandidate,category){
	var comparationData = new Object();
	comparationData['data[firstCandidate]']     = firstCandidate;
	comparationData['data[secondCandidate]']    = secondCandidate;
	comparationData['data[category]']           = category;
	$.post('<?php echo Router::url(array('controller'=>'compare','action'=>'getComparisonAddress'));?>',comparationData,function(data){
	    $('#result').html(data);
	});
    }
    </script>
</head>
<body>

    <ul id="errors">
    </ul>
    <div style="float: left;">
	<div style="width: 250px; float: left;">
	    <select name="firstCandidate">
		<option value="0">Seleciona un candidato</option>
		<?php foreach($candidates as $candidate) {
		    ?>
		<option value="<?php echo $candidate['Candidate']['id'];?>" <?php
		if(isset($firstCandidateId) && $firstCandidateId==$candidate['Candidate']['id']) {
		    echo 'Selected';
		}
		?>><?php echo $candidate['Candidate']['name'] ;?></option>
		<?php } ?>
	    </select>
	</div>
	<div style="width: 250px; float: left;">
	    <select name="secondCandidate">
		<option value="0">Seleciona un candidato</option>
		<?php foreach($candidates as $candidate) {?>
		<option value="<?php echo $candidate['Candidate']['id'];?>" <?php
		if(isset($secondCandidateId) && $secondCandidateId==$candidate['Candidate']['id']) {
		    echo 'Selected';
		}
		?>><?php echo $candidate['Candidate']['name'] ;?></option>
		<?php } ?>
	    </select>
	</div>
	<div id ="result" style="width: 500px;margin-top: 30px;" >
	    <?php echo $content_for_layout ?>
	</div>
    </div>
    <div style="width: 250px; float: left;margin-top: 50px;">
	<?php foreach ($categories as $category) {?>
	<?php
	$selected = false;
	if(isset($categoryId) && $categoryId == $category['Category']['id']) {
	    $selected = true;
	}
	echo $this->Form->radio(null,array($category['Category']['id']=>$category['Category']['name']),array('checked'=>$selected,'id'=>'category_'.$category['Category']['id'],'name'=>'category'));
	?><br />
	<?php } ?>
    </div><br />
</body>
</html>
