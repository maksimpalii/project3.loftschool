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
define('DB_NAME', 'project3');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'y/6>w1xkae>LJ~`U_,56XUGd|:lMynb^AP(sD{;_bF&HSoui:POd$Rdh6O|ulOD&');
define('SECURE_AUTH_KEY',  'C+):CRvV5qcG=*`iGzSty-{-U*l$oG4&p0TS.0/)(KDB%%=1Ea#GE]A^W,2YXVTV');
define('LOGGED_IN_KEY',    '1P%WZ;q7q9vJ<j~Z2%x-zCbqUSD^2BZusXoi>WJyO|^whrCe`.H%;X,8(DudN-@9');
define('NONCE_KEY',        '7<.v=c?pe9)[~rD}Nvhp&F50AH`q-X,f!XP&Qe[t-ZF=S(vuAT(Q4=8s-i0F$i_V');
define('AUTH_SALT',        'z=<Vd`S6?g0BfoNl@CJV|R~$m^.A!ZooA#&c2{V}?H9__-u3J+Y9&^t`>2pg3eFm');
define('SECURE_AUTH_SALT', '}5-B#)2az8Jq[fvceG|rM#M(o^<Rm8Q3SCIVYeL_q(~EA?%+MrLS`R-vhs+Gyib|');
define('LOGGED_IN_SALT',   '^twtz)#?*!,vRH^28{g@x2hi[V^@r$j`%}`*Nn^]WA6^H1:135$ ^7gVX|6p7jLf');
define('NONCE_SALT',       'WJ:u C/RVd-aF HtL!U^?OB*p.$a4`^z;:fv/#/W&^>d$,82@U=h*(e^^kI_sXRQ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
