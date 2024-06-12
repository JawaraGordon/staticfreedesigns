<?php
// your child theme's functions.php file

function my_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'my_child_theme_styles' );


add_action('wp_ajax_contact_form', 'handle_contact_form'); // For logged-in users
add_action('wp_ajax_nopriv_contact_form', 'handle_contact_form'); // For non-logged-in users

function handle_contact_form() {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $number = sanitize_text_field($_POST['number']);
    $message = sanitize_textarea_field($_POST['message']);

    if (empty($name) || empty($email) || !is_email($email) || empty($message)) {
        wp_send_json_error('Invalid input');
        wp_die();
    }

    $recipient = "info@staticfreedesigns.com";
    $subject = "New contact from $name";
    $headers = "From: $name <$email>";
    $email_content = "Name: $name\nEmail: $email\nPhone Number: $number\nMessage:\n$message";

    if (wp_mail($recipient, $subject, $email_content, $headers)) {
        wp_send_json_success('Thank you for your message!');
    } else {
        wp_send_json_error('Failed to send message');
    }

    wp_die(); // This is required to terminate immediately and return a proper response
}

function enqueue_custom_scripts() {
    wp_enqueue_script('custom-ajax-submit', get_stylesheet_directory_uri() . '/js/custom-ajax.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
