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
define( 'DB_NAME', 's21' );

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
define( 'AUTH_KEY',         'p5X>ng@q4%&VOjy?V9LD]w(65bS2k)E+r3kP`p8pug-#(.`~b]UUlnDZ41Z:nwil' );
define( 'SECURE_AUTH_KEY',  'Xp#eyXQuhHQ_wDR>-`-]U)Fk6]oo,j6&wKZx`It>{6(ce:9->T{Lz16[BdPm6,Y]' );
define( 'LOGGED_IN_KEY',    '|QrKxGeiv<zB#kfFzla3EQChuljoVqml:Ojxf?h^kiS5vATtiFHWT)]wK*NFz/^^' );
define( 'NONCE_KEY',        '}RNP4*QE9;;CD-2Rv4^&s<(cjoqdlS?*_}LrD:5[cgnrp>&i)]yd6F`9 %3AbS1(' );
define( 'AUTH_SALT',        'I04K6Q]d,[&tbN54B[LWj6s>)pEMZnY:)m9j`&7<{?3dE8UOw{il}Q-eqC-8uks^' );
define( 'SECURE_AUTH_SALT', '~QJ#xDC+UK=OG{HZ(2^^<st yYy@0!)B>KKiOA/7y]eojfHt @jnQ!!}]Lu9,{sj' );
define( 'LOGGED_IN_SALT',   'dx:z6.zHuSb|q^ETt9ecX!u={<|L65lEX~455tcGr!v=T=m,,sg@3>6]$}9QyjM-' );
define( 'NONCE_SALT',       ':HL[[ w%iizwc5FL(a@iFFcKRl$aLhw[.p4:Vfm^3YA{w/#4oR)z;^j~YK@V$HZu' );

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
