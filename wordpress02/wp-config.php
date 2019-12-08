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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'recruit' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BJ|UF~1^l@-_DjSqCe!<,`jjq^herz!l8;J W;|+bcsL&C6Jz*juj[6#tG+3LhY)' );
define( 'SECURE_AUTH_KEY',  '8Q}=g@TbiwmWdhV*BaXDENEE}b:e46/Io~2e)-TTO&qJlnf[<{JT`QvA:{qw$e[@' );
define( 'LOGGED_IN_KEY',    'P}LDC]MrL/Gbq5d8d,5aYH92[dIc@-+07m5f9Ovb)L^pl$,m7`b>]jlj6ltXRv9:' );
define( 'NONCE_KEY',        '+|pgi#iaP@I;%Kbll`Re/Q}{O7Mqp<P!PhdJ1M:KU~39,v4O0`A}i?aW-Ss?J)8&' );
define( 'AUTH_SALT',        '*~XJWt5yr%L4`~qNC*}KOZ}vVs%zsYM*VxrY`h}x3I)I]05 kR{sAtKVI)I.RhJO' );
define( 'SECURE_AUTH_SALT', 'iT.63n..u3>JrBL^&mDp,OE`8klCqDsvoww(RGnYJ6-9QlIvc^+}hh7Gy/LE>+ 9' );
define( 'LOGGED_IN_SALT',   'g6v7IRHATJrCF_H^Dx}d=>9qmlPC23&Mpp.[)d$Hkp?l8*ieS6IdQiS&eS9!Pwsb' );
define( 'NONCE_SALT',       '4`7aqR#PZ(MpDiy~I!A7,&UEF%=HENu|Vg&EtJ1:55?<EU_qW%jz ] Cf#Qb/LvK' );
define( 'WP_DEBUG', false );
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
