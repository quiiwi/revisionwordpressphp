<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'eprojet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`%n;|h^md<R=D,P##LdhlMP)5N7/B&:?q(oz5A}zaiN(Rlj.wX/-LunTDD*-n*a<');
define('SECURE_AUTH_KEY',  'idDV@ukX@rDowsP7t<G/2Q#ht6[K=bzHRh!#yuF&o=IUWME+zXFmkKdSft{`r+Ej');
define('LOGGED_IN_KEY',    'xs.|?j5Pwf%]z}ne0 sSreZ%q=ZJRuz*U!V0q+7G >;<>mvKt3JV(g/whsBP]B_d');
define('NONCE_KEY',        'I>!>Fz)# Y|~8k_HX_CVr< zvcz}wb{ )q.YDij]y4;(&r azjJ2Jx|,E=ZTB$5h');
define('AUTH_SALT',        'ah,WDc@M Pj8RVn=i63pr#wvi-1ZVpgAvH6?-L=1J9^wqW<<tZk[icC[g#c,N~:%');
define('SECURE_AUTH_SALT', 'VnF 3*9XJu$D@cFS,~A1`jWb*^7LP9r}^(6gmN-=Zy+kM3tNz}a#87BL=.5H2H2+');
define('LOGGED_IN_SALT',   'he/9(ORMKX+O6`I#ElFX8P=p7wRbh>pOLHzObU@XsY!+v_40fdr`p-!b08wYuL_F');
define('NONCE_SALT',       'B+0(u0m )8Po(YYmzhBh#enP#4N3B=y;4D7EuY6mq4ku)x|*$QFx:87d Hu2MG%j');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');