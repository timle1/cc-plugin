<?php
/*
Plugin Name: {{ cookiecutter.project_name }}
Plugin URI: {{ cookiecutter.project_uri }}
Description: {{ cookiecutter.project_short_description }}
Version: {{ cookiecutter.version }}
Author: {{ cookiecutter.author_name }}
Author URI: {{ cookiecutter.author_uri }}
License: {{ cookiecutter.license }}
 */

// Exit if accessed directly
if( !defined('ABSPATH')) {
    exit;
}


// Load Scripts
require_once( plugin_dir_path(__FILE__) . '/includes/{{ cookiecutter.project_slug }}-scripts.php');

// Load Content
require_once( plugin_dir_path(__FILE__) . '/includes/{{ cookiecutter.project_slug }}-content.php');

// Load Settings
require_once( plugin_dir_path(__FILE__) . '/includes/{{ cookiecutter.project_slug }}-settings.php');
