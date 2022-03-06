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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'KrzWI@6X?BQ<n;nWTIwf5wdCs)wjLS~dk4%Fbmcob_&&HB2B{1J9JKG%4By#Wgt[' );
define( 'SECURE_AUTH_KEY',  'w$R)S0+}A5Tr$pCiq0n^;C(x%!Rt.K v<(rV)qsp4#Idl=.;N&({Eo;ooj)W?t7^' );
define( 'LOGGED_IN_KEY',    'FR7amy[}x.bFTQ8P&;(_<|BA^+jU_}H8?^q>?31K:jkE@.kzD(<e<R8UJI}<.3xY' );
define( 'NONCE_KEY',        'fM`<R,|=l2+ub8XMlwE{T_I-nvu%jv0eW``%LeteF3^S.UX2D>9Yt%K} bDb<L/~' );
define( 'AUTH_SALT',        ' XOijHY[SkpvpjY2g;ap_q.GYtjsoeQ?=]RTu;;H4Q(9g8~oeE*I^,E9Ap5;LA>=' );
define( 'SECURE_AUTH_SALT', '8yR@Xc7|FI*VB^ok;Dl]t]i&xD/UQ679{C7CHGwiX69zC#O.-v%jxb*rOv!!+E,*' );
define( 'LOGGED_IN_SALT',   'TUEv(TNdVa0LSX&X$;yl?;~i3dJ%<VBi4(AJpFr{]I,~=E B^5tRK?jJN^!x@-Ku' );
define( 'NONCE_SALT',       'd+]h*7htLv/(#w?? dS$d|,`a{[y~]zvyttcZ:+R.cV~7r+Je{^7r: ev6^CBLuL' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
