<?php
/*
Plugin Name: Slug accent's replacer
Plugin URI: http://www.sebastianbarria.com/slug-accents-replacer
Description: Before a slug is created, this function replaces the latin characters with their similar unaccented letter
Author: Sebastián Barría
Version: 1.0
Author URI: http://www.sebastianbarria.com
*/

function reemplazarAcentos($str) {
	$tildes = array('á','é','í','ó','ú','ñ','Á','É','Í','Ó','Ú','Ñ','--');
	$vocales = array('a','e','i','o','u','n','A','E','I','O','U','N','-');
	$str = str_replace($tildes,$vocales,$str);
	return $str;
}
add_filter('editable_slug', 'reemplazarAcentos');
?>