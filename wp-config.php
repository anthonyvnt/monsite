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
define('DB_NAME', 'anthonyvinet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'x98gOB8}p]e!jyY7R|&`0e~KqS(e(lg1$evZ-gmPpe5$-U&M0R+N(@<#qhb5b9Sw');
define('SECURE_AUTH_KEY',  ' F4HN_pf#BNCbAk2PHic(=D8p|<i{?AC=2:8K?J`rd]BJpY8T`Ecg&P>! far)XT');
define('LOGGED_IN_KEY',    'JJB9jv1p+(Y:cFUC6,GUi[^nO4{Gye<|uJ8|t$[cF5lp /}H7i7&Y_V}JQcPeejN');
define('NONCE_KEY',        '_`Ox`(]CKGMSY4-ZDmImuu6?0jMn1d32FM#`tGG,`O,1%7SUR+l+V#aw9;,Q+kzR');
define('AUTH_SALT',        ',E9t622=%V0]#?N~zl>d)lL%SmQrE_Di-8m~F:^.K!vc)/-B%f|fub-V;-+U.{-V');
define('SECURE_AUTH_SALT', 'L=Bv;16A--d!$Q(3C/#AD(j04o#)}tpZ4B|NO=yXDgvFAqqYUg23UdXlSBtc+jKN');
define('LOGGED_IN_SALT',   ': Ms1qf[65GpKF*Edg8]RJWoP(/>-HSHq]]f1}.IjwUm/w]&U*`g=.B&9m)??`$!');
define('NONCE_SALT',       'YB`%+<JG4|2QjBoW+a`ndf_S/x>-E]>.Gm|3ThHOPHHd|w+HGN&83)dxqwNTd<s9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'avnt_';

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