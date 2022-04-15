<?php
/**
 * Plugin Name:       duplicate Mypost
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            kamal
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
if ( ! defined( 'ABSPATH' ) ) 
{
    exit;
}
require plugin_dir_path(__File__) .'vendor/autoload.php';

$plugin = new \Pentiminax\DuplicatePost\PentiminaxPlugin(__FILE__);