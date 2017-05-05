<?php
/**
 * Plugin Name: Exemple de plugin
 * Plugin URI: shuffleshowcase.test
 * Description: Este plugin modifica los títulos de las entradas.
 * Version: 1.0.0
 * Author: Albert Herrera
 * Author URI: http://neliosoftware.com
 * Requires at least: 4.0
 * Tested up to: 4.3
 *
 * Text Domain: wprincipiante-ejemplo
 * Domain Path: /languages/
 */
add_action('init','hello_world');
  function hello_world(){
    echo "Hello World";
  }
defined( 'ABSPATH' ) or die( '¡Fail!' );