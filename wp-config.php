<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'admin' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<]]57#,?C}kq!%<xa/y`*c%H8+]}8mi?5g%W^KWw_pH0<mA#shTppLT:M>Hz6XN0' );
define( 'SECURE_AUTH_KEY',  'zq0dk@f#$WuN)zcu5o}WhMxJOthXt1zIFSHfsQiBveq~)!CN^LcwN/=j3w,VE;UK' );
define( 'LOGGED_IN_KEY',    'fFWdtcyorXR&.MZh*#MN~W]+FfL4lWejZtgx<k6;vj-*dTUvx]7#;8knb$_cU=^F' );
define( 'NONCE_KEY',        'Hg(b4^!yc?NWewN!iO+(BukMvs6$1VG:U2Ro#k92tI9 def2ljs.&ka{W5At!9Wc' );
define( 'AUTH_SALT',        'zhz*8Py^fscD8|URZ7e7_~}3U+*0&/^4J<~t=JCr<(02MiM)Hw;Ww4T*ASav8.E ' );
define( 'SECURE_AUTH_SALT', '.1(v4<!^M6wjckh:?`afB-xs#e[Q-d~BTjb,dCi.cHH1Q-I&9~PVO2}#qzS.^>rU' );
define( 'LOGGED_IN_SALT',   'DXOa=bxj9m>.Q.^W*JVQpql+BT^YjJ-<_U/%CJtk|TJreF]D>E?_[2t*fXpns@6;' );
define( 'NONCE_SALT',       '1LpA}}h|GLQlweh%0:CszF31dE`_k|2(ofVtbP7##L6pvI^NUCo<RNH+qmvXZF[6' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

# LocalHost !!! Убрать при переносе на сервер
define('FS_METHOD','direct');

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
