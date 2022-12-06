<?php
/**
 * Plugin Name:       Google reCAPTHCA for Wordpress Comments
 * Description:       Защита комментариев Wordpress при помощи Google reCAPTHCA
 * Version:           1.0.0
 * Author:            Dmitriy Denisov
 * License:           GPL-2.0+
 * Text Domain:       wp-comments-recaptcha
 */
 
class Denisov_WP_Comments_reCAPTHCA {

	public function __construct() {
		// Добавление полей в настройки Wordpress
		add_filter( 'admin_init' , array( $this, 'register_settings_fields' ) );

		// Подключение reCAPTCHA api.js
		add_action( 'wp_enqueue_scripts', array( $this, 'add_recaptcha_js' ) );
		
		// Добавление блока reCAPTHCA в форму комментирования
		add_action( 'comment_form_after_fields', array( $this, 'recaptchadiv' ) );
		
		// Предпроверка комментария
		add_action( 'preprocess_comment', array( $this, 'preprocess_comment_cb' ) );
	}
	
	// Подключение скрипта Google reCAPTHCA api.js
	public function add_recaptcha_js() {
		if ( !wp_script_is( 'recaptcha', 'registered' ) ) {
			wp_register_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js?hl=ru',array(), null, false );
			wp_enqueue_script( 'recaptcha' );
		} else {
			if ( !wp_script_is( 'recaptcha', 'enqueued' ) ) {
				wp_enqueue_script( 'recaptcha' );
			}
		}
	}
	
	// Добавляем HTML-код блока Google reCAPTCHA, если в настройках сохранены ключи
	public function recaptchadiv($post_id) {
		global $user_ID;
		$recaptcha_site_key = get_option( 'wp-comments-recaptcha-site-key' );
		$recaptcha_secret_key = get_option( 'wp-comments-recaptcha-secret-key' );

		if (!$recaptcha_site_key || !$recaptcha_secret_key) {
			return $post_id;
		}
		
		if ($user_ID) {
			return $post_id;
		}

		echo '<div class="g-recaptcha" data-sitekey="'.$recaptcha_site_key.'"></div>';

		return $post_id;
	}
	
	// Проверка данных комментаия перед сохранением в БД
	public function preprocess_comment_cb($commentdata) {
		global $user_ID;

		if ($user_ID) {
			return $commentdata;
		}

		if ( !$this->verify_recaptcha_response() ) {
			echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Сработала защита от ботов Google reCAPTCHA</title><style type="text/css">html { font-size: 100%; }</style></head><body><p style="font-size: 1rem;">Вы не прошли защиту от спама Google reCAPTCHA. Вернитесь на <a href="#" onclick="history.go(-1);">предыдущую страницу</a> и повторите попытку.</p></body></html>';
			exit;
		}

		return $commentdata;
	}

	// Проверка ответа сервера Google
	private function verify_recaptcha_response() {
		$recaptcha_site_key = get_option( 'wp-comments-recaptcha-site-key' );
		$recaptcha_secret_key = get_option( 'wp-comments-recaptcha-secret-key' );
		
		if (!$recaptcha_site_key || !$recaptcha_secret_key) {
			return true;
		}
	
		if ( isset ( $_POST['g-recaptcha-response'] ) ) {
			$captcha_response = $_POST['g-recaptcha-response'];
		} else {
			return false;
		}

		// Verify the captcha response from Google
		$response = wp_remote_post(
			'https://www.google.com/recaptcha/api/siteverify',
			array(
				'body' => array(
					'secret' => $recaptcha_secret_key,
					'response' => $captcha_response
				)
			)
		);

		$success = false;
		if ( $response && is_array( $response ) ) {
			$decoded_response = json_decode( $response['body'] );
			$success = $decoded_response->success;
		}

		return $success;
	}

	// Доавление полей для ключей Google reCAPTHA в общие настройки Wordpress
	public function register_settings_fields() {
		// Create settings fields for the two keys used by reCAPTCHA
		register_setting( 'general', 'wp-comments-recaptcha-site-key' );
		register_setting( 'general', 'wp-comments-recaptcha-secret-key' );

		add_settings_field(
			'wp-comments-recaptcha-site-key',
			'<label for="wp-comments-recaptcha-site-key">' . __( 'reCAPTCHA site key' , 'wp-comments' ) . '</label>',
			array( $this, 'render_recaptcha_site_key_field' ),
			'general'
		);

		add_settings_field(
			'wp-comments-recaptcha-secret-key',
			'<label for="wp-comments-recaptcha-secret-key">' . __( 'reCAPTCHA secret key' , 'wp-comments' ) . '</label>',
			array( $this, 'render_recaptcha_secret_key_field' ),
			'general'
		);
	}

	public function render_recaptcha_site_key_field() {
		$value = get_option( 'wp-comments-recaptcha-site-key', '' );
		echo '<input type="text" id="wp-comments-recaptcha-site-key" name="wp-comments-recaptcha-site-key" value="' . esc_attr( $value ) . '" />';
	}

	public function render_recaptcha_secret_key_field() {
		$value = get_option( 'wp-comments-recaptcha-secret-key', '' );
		echo '<input type="text" id="wp-comments-recaptcha-secret-key" name="wp-comments-recaptcha-secret-key" value="' . esc_attr( $value ) . '" />';
	}

}

// Initialize the plugin
$wp_comments_recapthca_plugin = new Denisov_WP_Comments_reCAPTHCA();