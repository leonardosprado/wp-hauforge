<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'hauforge' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B7i)Rc]i^ZVg}6*H[:P/AAvReA+^Z{w4f_<m`;./[]F^h<nOFq{ps^N&kqPKaCcH' );
define( 'SECURE_AUTH_KEY',  'QmI<$w`onD4dXG<33E<5B-%|L?gh+%a.G=f@%Q[vxhd?gv/r]dlN2yE0Aa<<5y?=' );
define( 'LOGGED_IN_KEY',    '!yM9q--c8n/x `-OQr4+SDi2o|6)xs}MKJ3J=Y*i%/RIWM;{(c@YL>6H!aazJ*`R' );
define( 'NONCE_KEY',        'aZihdyJ&%q(X[jyo+p{tTPW_-89 b HpNA[&:#`(UbcKrKtt(nd]iPmPOe!Y)u@Z' );
define( 'AUTH_SALT',        'ZM{?|K 7<&5X5uEwRrUFo{=zIy`3jor+Mo%8+RMpNuu[f[cK!Vr@:YBgM$?G9>Is' );
define( 'SECURE_AUTH_SALT', 'RH)fhqXTTIA++=T Ff%T*[q8ChpHnE[|<3jH|()_r,HD$_xq2d9}t[Ea>2#As&fs' );
define( 'LOGGED_IN_SALT',   '.u.*EdVg*z99G*e1ijXl0lxa72q@=btswj7]T+XpN5ea+/]5Yp-LR1LvQ[G<x-5#' );
define( 'NONCE_SALT',       'l`ay([N{/dCkDFMER]cJ}Dhw@&T*0;=<]#);u>-s1*Yb?)u=JOK:DEO$.IuS7<!h' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
