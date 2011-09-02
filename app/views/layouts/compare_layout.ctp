<?php echo $this->element('header',array('js'=>array(),'css'=>array('compare')));?>
<?php echo $this->element('comparator-js');?>
    <ul id="errors">
    </ul>
    <div class="candidatesLists">
	<div class="firstCandidate">
	    <select name="firstCandidate">
		<option value="0">Seleciona un candidato</option>
		<?php foreach($candidates as $candidate) {
		$isThisCandidateSelected = isset($idFirstCandidate) && $idFirstCandidate==$candidate['Candidate']['id'];
		?>
		<option value="<?php echo $candidate['Candidate']['id'];?>" <?php
		if($isThisCandidateSelected) {
		    echo 'Selected';
		}
		?> ><?php echo $candidate['Candidate']['name'] ;?></option>
		<?php } ?>
	    </select>
	</div>
	<div class="secondCandidate">
	    <select name="secondCandidate">
		<option value="0">Seleciona un candidato</option>
		<?php foreach($candidates as $candidate) {
		$isThisCandidateSelected = isset($idSecondCandidate) && $idSecondCandidate==$candidate['Candidate']['id'];
		?>
		<option value="<?php echo $candidate['Candidate']['id'];?>" <?php
		if($isThisCandidateSelected) {
		    echo 'Selected';
		}
		?>><?php echo $candidate['Candidate']['name'] ;?></option>
		<?php } ?>
	    </select>
	</div>
	<div id ="result" class="comparisonResult" >
	    <?php echo $content_for_layout;//The comparison Result ?>
	</div>
    </div>
    <div class="categories">
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
<?php echo $this->element('footer');?>
