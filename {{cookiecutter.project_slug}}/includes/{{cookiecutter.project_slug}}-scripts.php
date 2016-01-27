<?php

// Add Scripts
function {{ cookiecutter.project_namespace }}_add_static() {
    wp_enqueue_style('{{ cookiecutter.project_namespace }}-main-style', plugins_url() . '/{{cookiecutter.project_slug}}/css/style.css');
    wp_enqueue_script('{{ cookiecutter.project_namespace }}-main-script', plugins_url() . '/{{cookiecutter.project_slug}}/js/main.js');
}

add_action('wp_enqueue_scripts', '{{ cookiecutter.project_namespace }}_add_static');
