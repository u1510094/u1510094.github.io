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
define( 'DB_NAME', 'wordpress' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g2u!MyA`}HJy0NR*XbUsmT];)f=S}f(c[[R&6D,5^2p!UZ$l457BltC_8GDHv0t@' );
define( 'SECURE_AUTH_KEY',  'AW{}AAX@> 080X.r[OSXOfPvmhuB|R$3H~?[y5NX|=^H]zO)x/0HlL*6*0R:0kt6' );
define( 'LOGGED_IN_KEY',    'x=Bt%iIP^l,V1_,BsYsi=Fe+e(81:G:|hE1=|c-0NH|GlnIW*ht*vQx8^PeBWI}=' );
define( 'NONCE_KEY',        '`)pJG>sAud;Dbb__9*@9(unEL2k6@0/]*q!|i_b2+FSL* T}3I#7rw`E;P;9f-b&' );
define( 'AUTH_SALT',        '[.Sb)RT>Wn 0z;I8w4k MKxU@_o6npdP1bIR:&gMhNct W0ek}qg=I$cN@L?bmC(' );
define( 'SECURE_AUTH_SALT', 'qp#4Pdp`Ug7}q{YgNnlkTQLoIa%{3mJhsrpwh!I3RVQ-4K8B7r?*eC^8w/VZ *Re' );
define( 'LOGGED_IN_SALT',   '0MP4jd#:ht885tyOF>hw6v>*vxJ`KybErIxAJ;+5Xk%3PX,f~*l<|SuJb7qa2mJ6' );
define( 'NONCE_SALT',       ':Bv;&?c`!((B`{0x4zWGP<^aHXB-YpNV5}HMTevD$P[Q&~1f*Mgr)XiT6yEl=HIS' );

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
