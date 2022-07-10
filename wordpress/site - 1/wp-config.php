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
define( 'AUTH_KEY',         'z}e=j>6f|)lJ9`kJ(5hl<H{+~th[-N/5h(3K@525_vKs~VHK+zQ/KP_bq4%U>_tt' );
define( 'SECURE_AUTH_KEY',  'U5jNy0|1)u,&|NDK~KO$CZrmhEz4*Jn*&o=Q+!(tvDsv$zy_;=eFMGa[$e$[+Y;2' );
define( 'LOGGED_IN_KEY',    'Rp[o;9N-~K2C[XA5EBEv->gRdw_JtboU,v:Icy X*tP}2:N6$NuCI6Gm`F@P9!?r' );
define( 'NONCE_KEY',        '+}B_|>s0:0fj9u5z;.Ik _Z@.ej@ PHC6;II/.nMjC-O(6JLtO-a5DhA^(e@GVvw' );
define( 'AUTH_SALT',        'z6Auw@Kj5G^1AG%#9[c^Y|+_;,l5R @Ag~Qn/GHY ?/SowB;4w+y,<udpRaKP3SG' );
define( 'SECURE_AUTH_SALT', 'E^5ciOl+lASSgg^&l`@le:N3>/o[eLW1Z8t^E(B[#t<,C?V4zb!+A^8(HpzAd!lR' );
define( 'LOGGED_IN_SALT',   ']i(~^>Rgn]=izl#yKi!dDM;:X2P/`?wLk;Km_OL[vu{xobM4u}R6J~IWw{49>pHs' );
define( 'NONCE_SALT',       'IVZVdB+#m3]@H~z*q)=YgHrUz-;)Z j!tL%TQ_zgOh7|B3Ne7OgJFYcm*;C,+$5R' );

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
