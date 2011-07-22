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
    var firstCandidate      = $('select[name=firstCandidate] option:checked').val();
    var secondCandidate     = $('select[name=secondCandidate] option:checked').val();
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
    $.post('compare/compare',comparationData,function(data){
        $('#result').html(data);
    });
}
</script>
<ul id="errors">
</ul>
<div style="float: left;">
    <div style="width: 250px; float: left;">
        <select name="firstCandidate">
            <option value="0">Seleciona un candidato</option>
            <?php foreach($candidates as $candidate) {?>
            <option value="<?php echo $candidate['Candidate']['id'];?>"><?php echo $candidate['Candidate']['name'] ;?></option>
            <?php } ?>
        </select>
    </div>
    <div style="width: 250px; float: left;">
        <select name="secondCandidate">
            <option value="0">Seleciona un candidato</option>
            <?php foreach($candidates as $candidate) {?>
            <option value="<?php echo $candidate['Candidate']['id'];?>"><?php echo $candidate['Candidate']['name'] ;?></option>
            <?php } ?>
        </select>
    </div>
    <div id ="result" style="width: 500px;margin-top: 30px;" ></div>
</div>
<div style="width: 250px; float: left;margin-top: 50px;">
    <?php foreach ($categories as $category) {?>
    <input type="radio" name="category" value="<?php echo $category['Category']['id'] ;?>" /><?php echo $category['Category']['name'];?><br />
    <?php } ?>
</div><br />