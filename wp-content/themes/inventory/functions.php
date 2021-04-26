<?php

add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_footer', 'enqueue_scripts');

function enqueue_styles()
{
    wp_enqueue_style('bda-style', get_stylesheet_uri(), array(), date("h:i:s"));

	wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel/owl.carousel.min.css', array(), date("h:i:s"));
	wp_enqueue_style('owl-carousel');

	wp_register_style('scrollbar', get_template_directory_uri() . '/assets/js/scrollmap/jquery.scrollbar.css', array(), date("h:i:s"));
	wp_enqueue_style('scrollbar');

	wp_register_style('my', get_template_directory_uri() . '/assets/css/my.css', array(), date("h:i:s"));
	wp_enqueue_style('my');
}

function enqueue_scripts()
{
    wp_register_script('jquery-v-3', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), date("h:i:s"));
    wp_enqueue_script('jquery-v-3');

    wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel/owl.carousel.min.js', array(), date("h:i:s"));
    wp_enqueue_script('owl-carousel');

	wp_register_script('scrollbar', get_template_directory_uri() . '/assets/js/scrollmap/jquery.scrollbar.min.js', array(), date("h:i:s"));
	wp_enqueue_script('scrollbar');

	wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), date("h:i:s"));
	wp_enqueue_script('scripts');
}

add_theme_support( 'menus' );

require get_template_directory() . '/post-types.php';

function year_shortcode () {
    $year = date_i18n ('Y');
    return $year;
}
add_shortcode ('year', 'year_shortcode');

function send_mail()
{
    $headers = array(
        'From: Business Dept Adjusters <root@takasho.work>',
        'content-type: text/html',
    );

    $to = get_option('letters_email');; // place wp admin email here
    $subject = stripslashes("Form from BDA Landing");

    $b = [];
    foreach ($_POST as $key => $value) {
        $b[] = "<b>{$key}</b>: " . stripslashes($value);
    }

    $body = implode('<br>', $b);

    $result = wp_mail($to, $subject, $body, $headers);

    if ($result) {
        $data = [
            'error' => 0,
            'message' => 'Email success sent!'
        ];
    } else {
        $data = [
            'error' => 1,
            'message' => 'Sorry, email not sent'
        ];
    }

    echo wp_json_encode($data);
    die;
}

add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');

function add_email_field_to_general_admin_page(){
    $option_name = 'letters_email';

    // регистрируем опцию
    register_setting( 'general', $option_name );

    // добавляем поле
    add_settings_field(
        'letters_email',
        'Email For Letters',
        'letters_email_setting_callback_function',
        'general',
        'default',
        array(
            'id' => 'letters_email',
            'option_name' => 'letters_email'
        )
    );
}

function letters_email_setting_callback_function( $val ){
    $id = $val['id'];
    $option_name = $val['option_name'];
    ?>
	<input
			type="email"
			name="<? echo $option_name ?>"
			size="50"
			id="<? echo $id ?>"
			value="<? echo esc_attr( get_option($option_name) ) ?>"
	/>
    <?
}

add_action('admin_menu', 'add_email_field_to_general_admin_page');