<?php


if ( ! defined("WPINC") ){
    die();
}

define("CORE_INC",dirname(__FILE__) ."/inc/");
define("CORE_IMG",plugins_url("img/", dirname(__FILE__) ));
define("CORE_CSS",plugins_url("css/", dirname(__FILE__) ));
define("CORE_JS",plugins_url("js/", dirname(__FILE__) ));

function np_registerCoreCss() {
    wp_enqueue_style('core', CORE_CSS . 'index.css', null, time(), 'all' );
}

add_action("wp_enqueue_scripts", "np_registerCoreCss");
function np_registerCoreJs() {
    wp_enqueue_script('core', CORE_JS . 'index.js', 'jquery', time(), true);
}

add_action("wp_enqueue_scripts", "np_registerCoreJs");
