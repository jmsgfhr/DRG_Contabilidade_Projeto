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
define( 'DB_NAME', 'contabilidade' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '!xzbs[e!a5usSe<Osu?@kJ9N08V|(lC=qCzm#`Uhc@StYm]3SFm}KB@@!!obG0g?' );
define( 'SECURE_AUTH_KEY',  'kd#=b.f:=fK{hkqS-0tEIH{ mA&W@6Q*`w$8u%Fs=D,Xb6W9*Cs.},!@nMC_B5SG' );
define( 'LOGGED_IN_KEY',    'eYc=jUj|Q-VuHI((UT!!{EK;!W%Zwl[Q&wSL0jN!5n.,Ktx%,g#|#lic|sL8]MC}' );
define( 'NONCE_KEY',        '5KO]DUL1cvL#:62zb2r+e K>aSRjRe`J.]XTjX>$2DTvp1+S4dd%{+6f1ao1Sp;I' );
define( 'AUTH_SALT',        '!(NA5#V:Ym0}rHeTg)&s]+XVl.pU-N,ZZ5rVL}1AGLffuhw5x$MSSXCOcRmb,n> ' );
define( 'SECURE_AUTH_SALT', 'WLt>{EG[nqI8phWh,wH;jzlyLv35fKWdVN:VFwYiOm09xda42nnx,gc8WtTJ4vMp' );
define( 'LOGGED_IN_SALT',   'U|t?,+E`FHL9>+6YWCZP>?Gv!T-m1Pf:uN&#!z5oH;tXzZLdF!X7J02Bnn5fRWb~' );
define( 'NONCE_SALT',       't)aEW.sY{DoZtgTaY2z99S+Q^&^8;-CuNaPagAM#F5HL7]ZPUN0(kO5jgDfwZA~J' );

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
