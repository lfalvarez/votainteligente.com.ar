<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminHelper extends AppHelper{
    function booleanValue($value){
        if($value==0){
            return 'No';
        }
        return 'Sí';
    }
}
?>
