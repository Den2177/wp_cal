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
define( 'DB_NAME', 'wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Su7;IKocX=A.U>(lFX3PV=lRf~]$CRBp QHoUu;m;H$1-a1Vh2Bs<LH6onf7)jb1' );
define( 'SECURE_AUTH_KEY',  'Itn1}f|DUivIcE9U,t2Y994$k$A)V;ONB-7tMKL,vhGD*M=w5*Gp{_X|)-q63XFc' );
define( 'LOGGED_IN_KEY',    '^c|SZrYPxq9H?))ciF&<5gO{_A/0/bas]7,TjQ=Z>4c2uu;nD{g^L5#0 XIHlXng' );
define( 'NONCE_KEY',        'DWx;fq#W5yKo$;u]fK{,]X_<WVlB$Zhz G)5P7E) G fi:*.{?)`P237.gw&bGX`' );
define( 'AUTH_SALT',        'c{ ew+elp0xB2JCFuUP-~86`0U5A3].AF%MZq::844J_Oi<rds%Q1t^}!{k(fdp+' );
define( 'SECURE_AUTH_SALT', '9Q2FCNumZwbzd3nj@^=e~f2,m#C[Ilc9BRKu$&=bQz$MPO=le^y,rxQIytFU8nIR' );
define( 'LOGGED_IN_SALT',   'gCw/qLzr-?Y~$O%vTrBjAK^9tXjkam00AU`/gB^Uzl$9Nk[]}WP5f(S~(g=s5*P[' );
define( 'NONCE_SALT',       'emV6|CWjUy4fKj(<^YL7oK26/8,TQYW=Uq]R{q9N!k;s(7h-5]#IFP>nN|yZn n?' );

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

define('FS_METHOD', 'direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
