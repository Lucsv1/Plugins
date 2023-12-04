<?php
/**
 * Plugin Name: Novo Plugin
 * Plugin URI: https://devel2.wp.eduead.com.br/wp-admin/plugins.php
 * Description: Plugin de Funcionalidades para WP
 * Version: 2.0
 * Author: Lucas Vinicius
 * Author URI: https://github.com/Lucsv1/Plugins.git
 * Text Domain: np
 */

 if (! defined("WPINC")){
    die();
 }

 if (file_exists(plugin_dir_path(__FILE__) ."coreInit.php")){
    require_once plugin_dir_path(__FILE__) ."coreInit.php";

 }