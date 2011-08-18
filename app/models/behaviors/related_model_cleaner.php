<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class RelatedModelCleanerBehavior extends ModelBehavior {
    function removeEmptyDataFromArray(&$model,$profile){
	foreach($profile as $key=>$dataInside){
	    if (is_array($dataInside)) {
		if ((!$this->hasArrayInside($dataInside))) {
		    if ($this->shouldThisElementBeRemoved($dataInside)) {
			unset($profile[$key]);
		    }
		} else {
		    $profile[$key] = $this->removeEmptyDataFromArray($model,$dataInside);
		}
	    }
	}
	return $profile;
    }
    function hasArrayInside($array){
	if (!is_array($array)) return false;
	foreach ($array as $key=>$data){
	    if (is_array($data)) {
		return true;
	    }
	}
	return false;
    }
    function shouldThisElementBeRemoved($element){
	$thisElementHasAtLeastOneElementThatIsNotNull = false;
	foreach($element as $key=>$data){
	    if ( $key!='id' && ($data != null || $data != '')) {
		$thisElementHasAtLeastOneElementThatIsNotNull = true;
	    }
	}
	if($thisElementHasAtLeastOneElementThatIsNotNull) {
	    //this element should not be removed
	    return false;
	}
	return true;
    }

}
?>
