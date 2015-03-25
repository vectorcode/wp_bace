<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'WPCACHEHOME', '/home/a/atlant01/devel.vectorcode/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'atlant01_devel');

/** Имя пользователя MySQL */
define('DB_USER', 'atlant01_devel');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'zZQ63sC9');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#HWs:dS+oi?g>j[+:_Qx|W5RD+-!sv5d.}{&y@47*/bW6q9|l%=}IK$.y-*Tu-me');
define('SECURE_AUTH_KEY',  'xuz<QZj?[,wh||2:3.nnnBTK,/obYN-v:&xGG||5~LQ?M|8<ow(g?SndkX=BQ+dk');
define('LOGGED_IN_KEY',    'cV)3$B~V){K+_ZI+g)l?`-zc`:yc@uCk/C2tifq]2{RkzA9<l&i0?c&]z#!F=PBi');
define('NONCE_KEY',        '!m5FTJVv!N,:Q<LVtk_*=q8Zcgp8u9IjrU*Rz}= X7Ars|.D @5Ac6?@%@]sBC^L');
define('AUTH_SALT',        '+&GXPpv<RWh+p.dG4#wWLKBIvn)7P<em|s-(.g4Owy[p!|yM@G^8`yD|FrMzm-Cm');
define('SECURE_AUTH_SALT', 'O(-m1Um |FRBD-mpQAg{N|l8pF+U<+aw-$(dyQV@s,|}=:=VrO?J5ALlfKtO*O6C');
define('LOGGED_IN_SALT',   '8_]$`m8,R$y6C]2VPMUvNR-X&qzXpup^UqfED!M[CQI?wLpx0r&`$+@ozBbtd@=V');
define('NONCE_SALT',       '[OBL|nWwYE>Q:eCC[I$4EqW+`iL6[TE~PFg*Cjz!V=d{$(b@#:p0IOT&%-lxx*w.');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'fbpr_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
/*На периуд разработки включаем отображение ошибок*/
define('WP_DEBUG', true);


/*Отключаем сохранение редакций в БД или ограничиваем их колличество define('WP_POST_REVISIONS', 5);*/
 define('WP_POST_REVISIONS', false);


 /*Создание файла логов ошибок php_error.log - создаём в корневой директории, а в wp-config.php*/ 
    @ini_set('log_errors', 'On');
    @ini_set('display_errors', 'Off');
    @ini_set('error_log','/public_html/php_error.log');

/*Включаем кеш*/
define('WP_CACHE', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
