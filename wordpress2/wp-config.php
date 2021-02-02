<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V<mGksm=%AKE3JeoIqROiez^CG#wqbYQh[m#R_E_F0;s/>18wFia*NO+IbMKyma<' );
define( 'SECURE_AUTH_KEY',  '7tY&3 sm;#So$c3~WhVi^w#w0u:LZ/g%eU&AM~q,IX[4EX4F@r=sPG(>fgi/i3[Z' );
define( 'LOGGED_IN_KEY',    '%JL%u<n?=Um[dU8CCP4;}+&/?~nxuI-W>.e@A{|>eO*1r!5j-=qo]Mo$AF= ^9XW' );
define( 'NONCE_KEY',        '5g w^nHU~il8OT7lJ7]JP4Evn?iwezg!,nB*/Sp%4nceLQ8M)G/E`L%gVIC~V#9L' );
define( 'AUTH_SALT',        'W%uFa8oq!_@$_4BROa2NXFrS2|ar`umCzl<BZ$fS%5 9;6gVx4woAzY!/RgLvM)`' );
define( 'SECURE_AUTH_SALT', 'OrvtL.g`{8<%=YbtcC|Po+NLJ@?Xjb mA wsKy$AN3#eb^sV-~{xHmlT2>0hZF)j' );
define( 'LOGGED_IN_SALT',   'E7]/eJ$kL5^UC37~?|_* e2.U:m|YDI$Vha+O={pZo&#/>7:Dz;kFb_%{L:}T>1_' );
define( 'NONCE_SALT',       'Rb|c;Sv;,]C:Q}HGp4G^:Ze?XybILf=9^)s mThLK<O[JR<bGV#6:1s{@3?O[)rm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
