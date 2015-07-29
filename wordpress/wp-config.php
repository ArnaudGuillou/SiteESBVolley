<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'esbvolley');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UxAH|FX!R/V1+@xXBffuz]32`835&I-YnQgRxoMMo!>x}#B5Na|646;fne|MMkHU');
define('SECURE_AUTH_KEY',  '>Sx%VB0ophoIT8n+chfM7vF`Zc/J[J*Ys,K|7<!2S9x[XT(qJI|{qNu>E<he27(6');
define('LOGGED_IN_KEY',    'Jnoam1:7lmjZdQ8~^$Y;nl,iX}F+N*qBmPHWPpL;#DT~sN%$8}oRPL[MJO|o=caW');
define('NONCE_KEY',        '~>u|CutghbmoyxJlg6QkIMzkqCY `.XLO-:D?B%Gjx`)gA{kWs}Zb,}/`WB5E|]_');
define('AUTH_SALT',        'F93!%rxrLulqvn }y)&wOn,%3z(J*1N(l~jVyc O;z/4t|n}0x4v{?b3OyR{+~v-');
define('SECURE_AUTH_SALT', '%oCg=!N2*8k!?4YYJOr|6V-?D-djF<aN.m-^hlK)KB$~zU*10LCb#1y-|hGU8-jc');
define('LOGGED_IN_SALT',   'Gk+}GW }!tGDjn$]L>d bp+-j_M3ZI.%%T{WlZ7=g>@q*2SBf~AR@x0f_LqhZ:H5');
define('NONCE_SALT',       'z=qxTOy-Bd6;SKt(DEY0r+-CT|-R[QI3V?z-|(|Fz*sf~PdiIM}-tqcX3`G7q;E|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'esbv_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');