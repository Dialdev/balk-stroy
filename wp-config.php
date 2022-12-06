<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'balkstroy_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'balkstroy_wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'balkstroy_wp');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~}Un3XeZDPQ-b7c,2elYd7@vwU%}]M,W?v/as7bRv)(BM](9g.+1}6S2_v~/M?cS');
define('SECURE_AUTH_KEY',  '~xdT|mP1+TW`Z8*WRS-tH}E!zt4L!bhd:Tex1Ql8l_9v@=KBO13|wkQ4prSIH@LM');
define('LOGGED_IN_KEY',    '+e,3|QL)|8dQ#B&rMPh8~d]dj?TpQjl~iA0OT$]+h%3o1Z@Pl@29]MPJ(aGW8uTO');
define('NONCE_KEY',        'lxc~A_L</,g@&W|Q@5.L|`(fV|]|(B,wO$ WL,:U!ROqf/|{=Y]eK;wy.?)A :e,');
define('AUTH_SALT',        'l&hI}g{rBTGn/$7-_Kd*vi5uM%aqwZY69jDo[FBjy:@/U/% <*4MRU+(H{B.t*6N');
define('SECURE_AUTH_SALT', 'g{,K%BbU5?1|-B|[7O&8Hukq?R6nIKIYH].nC9`?p=J{v||ME[$uL]EQ)3,?@.2*');
define('LOGGED_IN_SALT',   '<H=C8mN}^%^wZP#[,pja/g|E%+8qS$qI#XcU9KyFq-=}nT/<4^MnuX|f;Lq!B2%Z');
define('NONCE_SALT',       ':EF]j5u9X6dS|bN%gU#ow7&`n2oMpZb=h{&J`,&RpWOa!7.<:Q= D.TPdaR@8I_7');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);
/*
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', true );*/

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
