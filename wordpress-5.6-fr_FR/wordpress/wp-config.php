<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'themeperso' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ByFHLiWPf8-g7}/^]:v@9GZBM6<?da$y$2Wa&w+,gQ~j4K*r-QBt3.v==d549zy8' );
define( 'SECURE_AUTH_KEY',  'LFamu_$RY+1hai,JD!C$}VH40;%=ZkO=Amm869O`{5@($^a[?![<>J_Xo6qk_.IK' );
define( 'LOGGED_IN_KEY',    '1T}{<{F/%[r>@^9-Ex4SdPRWK-qh3]^phZcdmZ/vf4g`B78Q9xOJp?fs`:TZl69V' );
define( 'NONCE_KEY',        '.4 ep-t6rJA2X5Hjl?|IZ_cr<pk pQA]z=^|LEtNg$?8aZAo_<f[)n&(a2*vl)Ag' );
define( 'AUTH_SALT',        'tRjgWhYh,Wy`YSZ9a-3?-=*@VZsfU+/:G&23rg^fDo2K%7L|7?5:7pMVjvC^bfQ4' );
define( 'SECURE_AUTH_SALT', 'j^^h7kg][9pQ[/rIgn`CS#%~ml)(Q[~!Afm0P[,0IX-J:(p2H~iY$^{UEcmrSv#K' );
define( 'LOGGED_IN_SALT',   'CL,fw$o]:In<8j>%0@{K|l(A36xW^|;_H,5hv}2!9&$[k/i,k8RMl5+Mt8f1:qF?' );
define( 'NONCE_SALT',       '5)/!S/hG[vVq.nxlQj*oYonQ*cSOomM,S[W*? t:l=D(m-=n2to@+5G$9oU735m6' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
