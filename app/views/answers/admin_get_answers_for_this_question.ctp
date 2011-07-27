<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (!empty($answers)) {
    echo '<option>Selecciona una respuesta</option>';
}
foreach ($answers as $answer) {
    echo '<option value="'.$answer['Answer']['id'].'">'.$answer['Answer']['answer'].'</option>';
}
?>
