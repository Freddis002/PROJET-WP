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
define( 'DB_NAME', 'tpwp' );

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
define( 'AUTH_KEY',         'HCeHm(jBGPU+-TTp7{t7p=,vzRx?adWCsfKHoD%}5Uy_9!t7|m3EHG7Ask1qjVy=' );
define( 'SECURE_AUTH_KEY',  '=z[y|[<G_GaSBC_tg4u?p6W%6f(]:91>PmJxY9=FExe;+9_@9-]+5NeKCw<S]PCM' );
define( 'LOGGED_IN_KEY',    '81&hcZO2rzfq?.pQ*xdve`D`GJ^}yL(f8%eN:0#]Y1?0Xpuk.3i^BNmOta/pi}rE' );
define( 'NONCE_KEY',        'i9hb3Dp3tH:eMFoaSppsPz4(bZh8;;}vkoQ8`5i7=a Q{}Fs,&#oX)GjQuIi43:N' );
define( 'AUTH_SALT',        'W5XC7Rc;;}@K[AexCUbDD^}`(p%^ )@@).Hk!of|CpLT*Tvgq6InN$13Z3}mJX+,' );
define( 'SECURE_AUTH_SALT', 'P^F,$VrPes*N6]k|k^eGx=cXucBD$/Lc)u*zA[-PLgobJ9_O DzilIVlN#ONFrZx' );
define( 'LOGGED_IN_SALT',   '=>(f[anq@<Mp16T-RweWTpK7Gfue-:Vt]MhFLuZPa-4&O$?3O-/&p40,f?CYaT^:' );
define( 'NONCE_SALT',       'NFY<m~&k/MrB0!,ab&4yF0:IKylU:?$gHDndCD|l=U<YOQR^H)~Ik{sV(weA_ 6b' );
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
