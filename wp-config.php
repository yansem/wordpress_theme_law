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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'yas-wp2' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         ' B~ix=jH_eaX11a-1dl%NT-BA-~>{Z})M!w1|:/3Z}Ukl6>Ptvm&2~zO0X^_!C(A' );
define( 'SECURE_AUTH_KEY',  'U1BpnuY538lY7xbT{*tHq@*/Ivs5n0v24UC{D+^b+J0v`;I2f`FCsdxg*8.LBM^*' );
define( 'LOGGED_IN_KEY',    'kF5EjcMAYKwxw51(Ho;Gc2p-VXDPDvcMBI`UTMY8E$DM{qY-~sE8BuRwZ*cLOw1:' );
define( 'NONCE_KEY',        'pOz<|Bh:oX].~>=[8o!oi~*!F(yu>kcF*bD7NYFm0?8#:CdR[z*,/2@2jT&k;@`9' );
define( 'AUTH_SALT',        ',ph>$5M~}>5<El}]o0Pj>/,M6C9|2FC3oa[u&f3+8RXg=%~ +wl`!(YYCFeim/i]' );
define( 'SECURE_AUTH_SALT', '>uZS5Wj>VgL%^P9K,|c !oTXau[+_(wU3]L&|iRwTXA`k,,~3{+3)0(+~Nh5[?9~' );
define( 'LOGGED_IN_SALT',   'thgvx:38&TaD26Iktv(_e:k_^FuG<of^uRRN%mCh-.B,DIxKY O=JZ|[<A-7k/ g' );
define( 'NONCE_SALT',       '?nAXE/EB}(;L1Q9|T$t~J%~4!xHL(No_8@.<D:<9Durnc_6j#%h>+/:S+H0xh|Ff' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
