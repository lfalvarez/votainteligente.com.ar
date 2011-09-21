<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<img src="<?php
if(isset($candidate['Candidate']['imagepath'])){
    echo Router::url($candidate['Candidate']['imagepath']);
}
else {
    echo Router::url('/img/candidate/imagepath/default-user.gif');
}
?>"></img>
<div>
<span class="candidateBasicComparisonQuestion">Nacimiento:</span>
<span class="candidateBasicComparisonAnswer"><?php
    if(isset($candidate['CandidateProfile']['birth'])){
	echo $candidate['CandidateProfile']['birth'];
    }
?></span></div>
<div>
<span class="candidateBasicComparisonQuestion">Profesión:</span>
<span class="candidateBasicComparisonAnswer"><?php
    if(isset($candidate['CandidateProfile']['profession'])){
	echo $candidate['CandidateProfile']['profession'];
    }
?></span></div>
<div>
<span class="candidateBasicComparisonQuestion">Estado Civil:</span>
<span class="candidateBasicComparisonAnswer"><?php
    if(isset($candidate['CandidateProfile']['civil_status'])){
	echo $candidate['CandidateProfile']['civil_status'];
    }
?></span></div>
<div>
<span class="candidateBasicComparisonQuestion">Hijos:</span>
<span class="candidateBasicComparisonAnswer"><?php
    if(isset($candidate['CandidateProfile']['sons'])){
	echo $candidate['CandidateProfile']['sons'];
    }
?></span></div>
<div>
<span class="candidateBasicComparisonQuestion">Religión:</span>
<span class="candidateBasicComparisonAnswer"><?php
    if(isset($candidate['CandidateProfile']['religion'])){
	echo $candidate['CandidateProfile']['religion'];
    }
?></span></div>