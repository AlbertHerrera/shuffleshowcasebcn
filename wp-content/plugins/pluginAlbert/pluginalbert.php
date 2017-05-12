<?php
/*
Plugin Name: Shuffle Battle
Plugin URI: http://www.shuffleshowcase.com
Description: Plugin for make battles.
Author: Albert
Version: 1.0
Author URI: ...
*/


register_activation_hook( __FILE__, 'pluginprefix_function_to_run' );
add_action("admin_menu","addMenu");
function addMenu(){
  add_menu_page("Example Page","First Page",4,"First Page","Albert Plugin");
}
function exampleMenu(){
  echo "HelloWorld";
}
?>
