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
define('DB_NAME', 'blo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'troiswa');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'tcW[%<O]s!AiCrniD8Ck30JXz>6+&Eobf~Rby-`Y6*AvOubAWS@2sKLqS@Aj&_Ui');
define('SECURE_AUTH_KEY',  '?Grs9:ccg]4-EB)^^.k`bvf02H{$q6kX>9=p7h;.^vgI0Ai:bs0^*^jd Ws)o*=}');
define('LOGGED_IN_KEY',    'F{ *c}9Ztj`?4?3_S>A:j04?J0fO}#vim;l=SB-y+6(911iG+3GDZ{qc1ON#%A h');
define('NONCE_KEY',        '-^#52V*{Wg=$]<)-JZ!/at[JlOgg)Y$z~D+ZmL@Fyt}C|aq>FvFnp#]}J4F0+x7V');
define('AUTH_SALT',        '9jPmJQ8X8p_T2%DqEmpD-x/$:Y+9JeR[XaimNONe e:zQuS7nE=2}>L(/Tqu1DSl');
define('SECURE_AUTH_SALT', ']OM2]L#Y|?$.]#a!-<Ke]|r]8_l-dE!R$jnzGkWROS+oCI!(il2dU$^62%~T#Usq');
define('LOGGED_IN_SALT',   'c_f+k&1Qy;vHZ-|(@>j%=HM0M*k|uk[+m1dfo4%Ti]*-(MH}CT~=At7g~)Bv[>Di');
define('NONCE_SALT',       '}&|Kdt]:S8X6)a|A$;DCT/jKe]r.}6 Bh@!$`mHa) sG7<pi.m=[#2tIGNl?5Kke');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

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