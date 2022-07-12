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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpsite01' );

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
define( 'AUTH_KEY',         ')HTe;|Q9-E%4Lp^>|UC&ZBl5YRu ZpSef^KdaUZ+ p_Jv ;BCk1^|*tW:f`Lf;=c' );
define( 'SECURE_AUTH_KEY',  'V%$tr$u;R=.C]~!<SDj{LkS:CJM/Mi;WaZq#>1wL>3I&>aHy_&&F21)c@CtMJ^#6' );
define( 'LOGGED_IN_KEY',    '3N&Z0RULHx+Vua~bLfMXV?yz>L6BByH^Uq=_[wF/}K_MC*?KKRo{c{Umn{88ecPB' );
define( 'NONCE_KEY',        ' SmfGdr-)7B&X<eZCQh5x#%~vKPK2-K=OAX}IAlFFvq-bild4}#;9-1Yt?E>L P ' );
define( 'AUTH_SALT',        'O% h<8Ye$~yA8=v5.ExqKt-~F<E>.Od~</D48<2P>A9*sc!dBC|]kr_*1-qw)I@n' );
define( 'SECURE_AUTH_SALT', '=fK) )l<C+EqE%i=T^Bv9;t0U{v6pW]flEu+u!8=%A2U{MW Zm?7*Y+jw.O@{B1F' );
define( 'LOGGED_IN_SALT',   'w$HZPMSSs3Hx;KE_REQTr9Xa($=#$fFW4a[!h.<DW&w9Z$@$J#wDw1COb&f<cHv<' );
define( 'NONCE_SALT',       'Ro]P5KCtSGyv<[R_I4|>L=+0<e)PRGnQ9%87@d~Tl$OP]&xZnsU1/<!%P([ =?M~' );

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
