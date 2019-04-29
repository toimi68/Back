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
define( 'DB_NAME', 'portfolio2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'cRa*;W4scIUPTk@Hm**ALiX0]`IOr*A:hgY])5E~|zx$&wCvUI$HzNB)u.E*CEn0' );
define( 'SECURE_AUTH_KEY',  '#+S;o9_KF&&OZ%1,7jvJN3l7ga+CG=Bd#/<=uJdxKxFg+8Hwai#+_Unu>axA O8o' );
define( 'LOGGED_IN_KEY',    '~tPI}FCqwk2~A2zCD! ybyu]Er$i(M<f:+Cw~hy#BdHm2oC>({E]^&(:nAK$<FX;' );
define( 'NONCE_KEY',        'W2Z43~*y&cTs%@vV8.,e(}>^N%Gda&Y%D8RE*rD(*~G{-8/6a=Cs5lcT}N062s^*' );
define( 'AUTH_SALT',        ' X:,R/d)b]_zlCn,`Jlstw~$K=gn&$jTd8|+_UKo{^ur6=WD%%,Jt/5&:&KZ>$bq' );
define( 'SECURE_AUTH_SALT', '|=99ZokWX>jaG:K?Jjm?nKj/zgwi&rRX&9^vsW(^(}^t`tk[?aegy(D-r[){$cG_' );
define( 'LOGGED_IN_SALT',   '~7WS:!I6|hx#HK$R@@xa,IT @2])ImC2Wy/{mu$SlP(x!KO<9|wV:eja4;fj)B]<' );
define( 'NONCE_SALT',       'hu7:;ZfGF,kO5X&leVe|ZjipA,P[SB9xqeJaXE;U0PAtee!=F+#F `e_)xIV<2D)' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'pf_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
