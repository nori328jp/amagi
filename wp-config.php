<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'amagi');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'dbuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'dbuser');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':-#@bvLk1}ri32vYHUN)@TOs`Qv3([|_-zB1Jf|T^AU-E:nsOwvZ)=hWp-F773e@');
define('SECURE_AUTH_KEY',  'S-~8-r*|`e`V@3=PoBnM+Q!!J,Go|6tbdb+2_;z4c`j#+R8PenXpuL-n9;=)Ce9H');
define('LOGGED_IN_KEY',    'mgZ1Su0Gx[WJ^_sQ!WYd@+ P{=dNq/-]gg]rg.  6`Tlz#42cc_GoLae6H*0_k:*');
define('NONCE_KEY',        'WB# +[NL=K=h-2Hq4mU-<6)L7j!!rbc,$+JVEekP3*N}~4|%|RJ/52}3?=^rpv),');
define('AUTH_SALT',        'N9--ojf!m]+S|Ayb/WrbV$/-E(dyI(^x9- 0S8%+qr,,=[NnAM,lWfEek7:t?d[v');
define('SECURE_AUTH_SALT', 'Vv-vdNFf[G(=%M@Yv`,3TtLMDqLz%{EH5v+Sz:D{,;hDE%EKvZf+WQLh!F}-o!lH');
define('LOGGED_IN_SALT',   '9>|b;Q!11O0f(f+QE.9B!aWf^2bV0lf1sXK^#C{ALKpfo>Z#=3vW^7}bs>h?|-K4');
define('NONCE_SALT',       'SWPn~i-`E^X5Id(bR!=4)tW43&|*F[gw|xV{ 2DMT^PM;[7-9fJ;Z-4y_k3h~EGU');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
