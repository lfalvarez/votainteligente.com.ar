<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<option>Selecciona una respuesta</option>';
foreach ($weights as $idWeight => $answerAndWeight) {
    echo '<option value="'.$idWeight.'">'.$answerAndWeight.'</option>';
}
?>
