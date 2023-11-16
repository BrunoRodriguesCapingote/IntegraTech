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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'integratech' );

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
define( 'AUTH_KEY',         'y#-&*ngtU#gvG.uMI+jprd2$}kZx;ksF0T[Roop2o6)pQVBP~7ZcK3YLV@(]c/9)' );
define( 'SECURE_AUTH_KEY',  'zrtVO[PQ-a03C6/M0:ErFxvG(bJIyj5*R|XT*4&WUe)]QByOHNu_bqj)$1h:z(DX' );
define( 'LOGGED_IN_KEY',    'EZ73!L!_GUFlUuWFMN]KeCQE9tLo2pt9D{V{WJD.NY 3iCt.1f85}T#hq1>$V+/M' );
define( 'NONCE_KEY',        'lnJx?/yBj|`wgCf}o^8EMyR5!thG$>.B&mB=X&=zPQ-$xda6^Aj~_l5xYH/CrxM9' );
define( 'AUTH_SALT',        'w_SkOr/$gh<!2QfJYLU,SlmMgN7DOf<A#Mb})?=8?NnYziIhP/yp#i7A bj{=B]?' );
define( 'SECURE_AUTH_SALT', ':RIerk([~Kq<bM:<3Gs`u~f=cAC[:a6ot%~5M8#Q_m>~NH#L;ybbcXCk5Y7Q5_Ey' );
define( 'LOGGED_IN_SALT',   'Jy](c/$l4(Y^[ VOJ2K/iv{m!!ZJn2Fv6g?OGg`}|)pPMydo%(nr52PAe`BsQy?H' );
define( 'NONCE_SALT',       '9r|5PzNTejKFqly&G=v)qb=4R3DDh5hN$vcb_yQ@f[[L*od,+?) {FLWkgQVP+ML' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
