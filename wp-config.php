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
 * * Настройки базы данных
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
define( 'DB_NAME', 'mysite4' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admini' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'E*nQzd&Oqi^r^s`>FJD*b{%ltkVk[U,n/aN+%R3-?&x0_(Pf! P+03G};N%GkD^v' );
define( 'SECURE_AUTH_KEY',  'f7@6m7f~{_|;eFKr9P46jTNIZ7IkHes~E3KWNS%IU_3GO{C?y5m<@fTH%H7FCUoX' );
define( 'LOGGED_IN_KEY',    '?vPnG 3R_N0v*v6*q[OVDSB1ZTi#cPCQH>?A,.g`d,8WmPs9HIx_#ulXmEA*r=>n' );
define( 'NONCE_KEY',        'cuRnhubmTHRkhdY3R<HyZ%t?ht#,00}y(jT&o)|#`B>ca&;kXqn(QY&bF&f, A-O' );
define( 'AUTH_SALT',        'p.Wg}(j;cNjWeFW3AJQR$vc;8RcB6ZT,%RqtE){4gM-]mzj104[u~#xN^GOn$.KO' );
define( 'SECURE_AUTH_SALT', 'lz|L^~8u_Mx_U{M9iSL.fo,H_LA+2fl^sM./I%NYhzNLTlco0/Y`5X8>[?;ahd2h' );
define( 'LOGGED_IN_SALT',   'ch}/~v3X($36aQA=R;kZE4/7B.}oj%GGSL/0rm0b<-lT)=+^L-Dok[#QxJ$)g&%5' );
define( 'NONCE_SALT',       'n|Prz=4W +D-zL4r@vR35@ZWNB}b{9_`FC0mN{e-V0c4^,+3f=0,`3kb1#uWyW$Y' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
