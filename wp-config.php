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

// Link para o 
// define( 'WP_HOME', 'localhost' );
// define( 'WP_SITEURL', 'http://novo-dominio.com' );

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'loren-library' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '|%x`xX<u(!LT*STYdQR-mAB3M%pWmperitR!R|wm.5G] lr&55 xpvKJiS5[#5H_' );
define( 'SECURE_AUTH_KEY',  '/4WKzde}SmAQA~j^8[s_b)&vv ZESXX82z#zqykXOS?.B2l&8Dxxa4lz=Cz7gcjP' );
define( 'LOGGED_IN_KEY',    'KGY#8S&jo&%f|&^.q!L^!](uWnb?!JBM,}&v20QK,)~[Nc2@U1jJ2P;(/uPFq|uU' );
define( 'NONCE_KEY',        '3McJzsozlQdyU3oZl@9$CDN_!.6F}GFaG#kX&u+74/!ug)2 YPXW1}iR8s)V;ee3' );
define( 'AUTH_SALT',        'cD<L^<f;2w`E!*T6 1YX3vYde^.+RP](4F]bHI@?,li!{7;Z3IQvQi9juZU@R_`.' );
define( 'SECURE_AUTH_SALT', 'Xs]phS!o>A%O23Jr%skAP:A4Ool~BQjG$=Reury}!._+3NC/zj]D=,7&6A81Ttll' );
define( 'LOGGED_IN_SALT',   'F`@C.U+}y!Irig=@6&6>j6yYeB$#^xpjXHZ(Y,)UJX(;a(Ge?}%?H7RNwq3Ac(Go' );
define( 'NONCE_SALT',       'LY(kv:S.dj`+]TL1[#BMwWhN{_-JiTaFb$fRXdY}|&OHZakyw4aUO&tO?cKVQ|0)' );

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
