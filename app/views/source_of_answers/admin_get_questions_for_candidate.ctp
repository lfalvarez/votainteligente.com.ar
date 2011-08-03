<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<option>Selecciona una pregunta</option>';
foreach ($questions as $categoryName=>$questions) {
    echo '<optgroup label="'.$categoryName.'">';
    foreach ($questions as $idQuestion => $question) {
	echo '<option value="'.$idQuestion.'">'.$question.'</option>';
    }
    echo '</optgroup>';
}
?>
