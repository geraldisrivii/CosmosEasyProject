<?php

    add_action( 'admin_post_add_bid_action', 'process_custom_form' );
    add_action( 'admin_post_nopriv_add_bid_action', 'process_custom_form' );
    
    function process_custom_form() {
        // Получите данные из формы
        require_once 'servises/Validator.php';

        $validator = new Validator($_POST);

        $validator->add_rules([
            'name' => '/[a-zA-ZА-Яа-яЁё]+/',
            'phone' => '/^\+?([0-9]-?.?)|\+?[0-9-?.?]+$/'
        ]);
        $result = $validator->get_result();

        if($validator->is_valid() == false){
            return do_action( 'add_bid_form_completed', 'error' );
        }

        ['name' => $name, 'phone' => $phone] = $result;

        global $wpdb;
        $result = $wpdb->insert( 'wp_bids', array( 'name' => $name, 'phone' => $phone ) );
        if($result != false){
            return do_action( 'add_bid_form_completed', 'ok' );
        }
        return do_action( 'add_bid_form_completed', 'error' );
    }

    add_action( 'add_bid_form_completed', 'add_bid_form_completed' );

    function add_bid_form_completed($status){
        setcookie('status', $status, time() + 3600, '/');
        header('Location: ' . home_url() );
    }


    add_action('wp_enqueue_scripts', 'add_styles_and_scripts');
    add_theme_support('custom-logo');
    function add_styles_and_scripts() {
        wp_enqueue_script('cookieLib' , get_template_directory_uri() . '/assets/js/cookieLib.js', false, null, 'footer');
        wp_enqueue_script('sweetAlert' , get_template_directory_uri() . '/assets/js/sweetAlert.js', false, null, 'footer');
        wp_enqueue_script('FAQitem' , get_template_directory_uri() . '/assets/js/FAQitem.js', array('cookieLib', 'sweetAlert'), null, 'footer');
        wp_enqueue_script('Gamburger',  get_template_directory_uri() . '/assets/js/Gamburger.js', array('cookieLib', 'sweetAlert'), null, 'footer');

        // styles

        wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
        wp_enqueue_style('main', get_stylesheet_uri());
    }
?>