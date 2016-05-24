<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'simulado');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1234');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T~n``OWVePz*0{[h$6y]$Els)12rOUENBIDbB<9,&yZ~L|h6e?c29su/6CqglQDi');
define('SECURE_AUTH_KEY',  ':dM*s~F.{!Tri/dsSXZs7gtgnv,x)ix<]XbtbBAW|qirRJ}mG$g9I{jB^{JTY}No');
define('LOGGED_IN_KEY',    'SKhS0`QnO4p7}JWU71`o/sSkq],3j$eDw6OO`Y[m4{Tq@JVk:![C2_}V95e1y/@9');
define('NONCE_KEY',        'WztxtVu=TL+p[o_uVwm,8:@7U3V7rNM~|xA7GTK3K^~E..F=w?EgOr~KqY;z*NnV');
define('AUTH_SALT',        'eF|o@m:B)d,<2o_x[Lv4>P{*[z<>8X]q>d1FCkq$Q2UW6SypctBa}Xp`yqa8T6v?');
define('SECURE_AUTH_SALT', 'd5qt4*+Gc`gOJmIG>a0vW{>I^*zERf/8hL ~E;fjI=p]HJ3u]GOeZNRm7-M;{;6i');
define('LOGGED_IN_SALT',   'k&(7=fg!LaNS&<(yH/f$Cfy>Je-,}`R,q{ga).$OoC4U/,ys7#?B,!tShPXyv_lv');
define('NONCE_SALT',       '}f$`*%!2n_5B6P7suTrPG&3[*8@Nu=xM?xp3;3F)&X;qggax<OAg)jB*x[Gv+L$y');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
