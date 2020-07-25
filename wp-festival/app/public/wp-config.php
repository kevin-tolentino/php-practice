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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vKAFXuTmoJRxrNyFOt0CjkbiLR2H4JVSwiyEvBqsONBMuACUfLVUQCeszPA3hvKS8dRAueYjdftiJ30iBrqrzw==');
define('SECURE_AUTH_KEY',  '+gYitnWCqgtKP7d+dF5OD/Rg9JHFydoOKUbPZ+eZDk6QPTKp/CsFd8KSrLjB+6jo/jAOwV7GAISHN+t6nMI/cA==');
define('LOGGED_IN_KEY',    'RmK+JWwbYpJz4e9ohAINptH2CsRX/kbQUpmjYv3Pc8ysCc02ZrQmcy6oya3lyQ81GuoFmoPSo/vtnEYMBUEGsg==');
define('NONCE_KEY',        '6rXIjxVycokCdec/8sU7jfaH5gWcZngc2Vzt1OfVWAKOgdpEjHrgkgHPcVCRk9Q7mgUSTwOxaOTKvHR+ATLz+A==');
define('AUTH_SALT',        '+f5V9jCjt4xoAWeQrWu4uIPfBFtWK0FPAs02NoUbZr/UGjej9SThhiCqyfaPfQEeJwPgOps6rdikyuvhHmpAiw==');
define('SECURE_AUTH_SALT', '7JTzCEepM2dZDR/nO9NbmG95K1GUybgdjFH2Wj0ltySjLxsSXJnBXF+oeICfzvY64KSODryB2MY9EDO+OWKIOA==');
define('LOGGED_IN_SALT',   'W17OKKXa6yWTA+Ajtl4rIW5mHx4zaQYeBxtGWB5s2+Mal2H7TDFnx5TJLcvdW9rDgdegCmH9NPPJ7yvD0wpx8Q==');
define('NONCE_SALT',       'rgzMJtiwO5GA26b9QpNtFVkQPXlFHtwwljmENNRT5zwageEV15eHYdBrDPKNV7bIsM5BMjAjDuJKKPcNguz+9w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
