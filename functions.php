<?php

function stageblog_enqueue_styles()
{
    wp_enqueue_style('my-style', get_stylesheet_uri());

    wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/src/output.css');

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'stageblog_enqueue_styles');

function custom_password_form()
{
    return '<form class="flex gap-4 flex-col" action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
        <p>Deze pagina is beveiligd. Voer het wachtwoord in:</p>
        <input name="post_password" type="password" size="20" class="flex flex-col gap-4 p-1 border border-gray-700 rounded-md" />
        <input class="border border-gray-700 p-3 rounded-md cursor-pointer" type="submit" value="Toegang" />
    </form>';
}
add_filter('the_password_form', 'custom_password_form');

function custom_protected_title($title)
{
    return '<svg fill="#00BCFF" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M17 9.761v-4.761c0-2.761-2.238-5-5-5-2.763 0-5 2.239-5 5v4.761c-1.827 1.466-3 3.714-3 6.239 0 4.418 3.582 8 8 8s8-3.582 8-8c0-2.525-1.173-4.773-3-6.239zm-8-4.761c0-1.654 1.346-3 3-3s3 1.346 3 3v3.587c-.927-.376-1.938-.587-3-.587s-2.073.211-3 .587v-3.587zm3 17c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zm2-7c0 .738-.404 1.376-1 1.723v2.277h-2v-2.277c-.596-.347-1-.984-1-1.723 0-1.104.896-2 2-2s2 .896 2 2z"/></svg> ' . preg_replace('/Protected:/i', '', $title); // Vervang "Protected:" en voeg een icoon toe
}
add_filter('protected_title_format', 'custom_protected_title');
