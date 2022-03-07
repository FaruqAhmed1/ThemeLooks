<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themelooks' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bd>G/z2~uawDM,PW:?7 LnN2^!dv+p,^g~*=p[1_E9]oD*^sll|o0vApxpptG4Qp' );
define( 'SECURE_AUTH_KEY',  '*);UZl(y2o>Oc.i+G2gLX30Z 1Bv9mEzbOYpK;&3~cgMtJ^Fpz!LM4=7q;{xa?)U' );
define( 'LOGGED_IN_KEY',    '*l.):s![*2v}l75Baz-{!Z&%$/?3UnZ0}#)OjHxs W~7G_S`]jidCl{m<*/$3%(-' );
define( 'NONCE_KEY',        '5%NoIub%;Wpf29Ikow [nQgxzOZ7<Q7>p9|YqOSl>liWuW0X`Z9HV<*-.dQH]{32' );
define( 'AUTH_SALT',        'i9n:GH]6(PSq!PJ?bU&/I~QV+_py37yGlx+4pYMLc#<9h&Zgm@C}SCdJyi+uu.&Z' );
define( 'SECURE_AUTH_SALT', '#oUptWU[rXa0Ac$u<|nC&<^hZ+A~2a[af4%_q:tq82Z]fk9D.$,g4K~m#5k ~l1]' );
define( 'LOGGED_IN_SALT',   'rdh9PG6k+q,M8{e#)M~?wk3QnYvNi#?a=m,rAZ@hsQs451x.Uag+x1#N9gE,Ab4F' );
define( 'NONCE_SALT',       '#VI&F^cZf}-6P@Sk/g1]=)vu[PP<p2r` 8GXu(q?>RbF*BnX%rOf`&I-9?}>ykuk' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
