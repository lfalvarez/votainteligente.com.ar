<?php
class AppModel extends Model {
	var $recursive = -1;
	function slugifyName($name){
	    return strtolower(Inflector::slug($name,'-'));
	}
}