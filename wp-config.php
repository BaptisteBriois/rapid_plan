<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'rapid_plan');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'gu37NR+ofV1<^EX)N_S#!+V9n&3)d:WF_|t!%*On,HoNWEB-FAqWa91>-)$?N0U-');
define('SECURE_AUTH_KEY',  '140af{N=D@xB#SEHn-[_;YKaRil/^Pb-um2=:{{sz-/j~i| cfdN|h_FA`Bihw=b');
define('LOGGED_IN_KEY',    'N;,n_9Mo1D<_>F-CW]5>ncasndt(v^c%nc[5,=%|GtB}sbUiC6I+g|QE,.T1pH:&');
define('NONCE_KEY',        '6GB#U#{.@+Tn|f|fnn3b%Y2e|5]}V4)jB@#rI.$ebCjp+--h(qr&o1~l:|mg,wk]');
define('AUTH_SALT',        'i(4O~oh**DxBGZz)8^|}*H1My8X>+4[+ca<<Y=7n[k^`FM.VZwN+UWs]El4oy/PP');
define('SECURE_AUTH_SALT', 'ix?VvY.^Q*/yTugDN,%;<D|/Y+3N4EjhJgyh5mxwZI|CPg51pT?296;o}S}tf3gn');
define('LOGGED_IN_SALT',   'SvF85~9UG059b =EDWAhd:#;8A}iK:[zp5$bC/,sbUQj{1[S|%9B./UIN)LL*D_1');
define('NONCE_SALT',       'kSDur3q~HEui~z4DCCE?rS1@w.y})g?!|}LW7b>!Sc{:5 U~>{^N}jh4-z2i% ck');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'rp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');