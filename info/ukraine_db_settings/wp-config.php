<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'belkaz_borsa' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'belkaz_borsa' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'F8#66jLz@g' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'belkaz.mysql.tools' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>>>**7n1yLR@XS($S*v`+Jcs]OnqUcI^f?V$0^K!Aafe/{eMf1.sp~xl`@)f`IFX' );
define( 'SECURE_AUTH_KEY',  'owMJ C-]?r0+nmvu9_2}*{bD|~3K+x6[Nss&H,QhFu:BxY(L5<>m8E>d(;J^r6#p' );
define( 'LOGGED_IN_KEY',    'Ho<v-ea1jg=x/4SWzNzLceb>1^x`HOqH9D-`@yIVEkrLj7} 1?S>O)xZYov;NU4Q' );
define( 'NONCE_KEY',        ' NVhLhXK|3nK0n^8Xmji7pzaIf=~YfhmLnK#}[Tt7}]jL$y?NL] $!q>q]#*cpK#' );
define( 'AUTH_SALT',        'v.1cIYPi}[.Lp?rA:u$1QrT)WtB9V##nsX|2fT}$Ui<BqsIakTzTUXhPknsU5Fag' );
define( 'SECURE_AUTH_SALT', 'cT,qwY@#64:{.(Vqs,w!ildW_v*LwMy.G1<>.Kl(]Foeh^w7-1Do:q^P.}Qy!2rV' );
define( 'LOGGED_IN_SALT',   'PnQ9)|c@8P>,|*wJYL6 JXN.16 /Erd2RkHHVmH-|Cf|ZYa#PTQEMj<Fd/W]}r}J' );
define( 'NONCE_SALT',       '*|Nd[F/;i7DVL7}S{f!`uIUDx:fEqCp^|elcg$8Wl^~?Civs`>4I2466%6,Y^gLv' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'borsawp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
