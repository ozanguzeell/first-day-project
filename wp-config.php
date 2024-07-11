<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'newwp' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dV{BtZl~lbsZ?*o_I[u}hnyeQe}(,k*{v-CoBH%9vF:;sDaoQ6*,);,KE^VGcXNC' );
define( 'SECURE_AUTH_KEY',  '7]u[?r(v.H$Z$GcNcPj2674zWik,nL0Sp22N?L@-Jx J&m1i5QRZ]vYnKV <sMeq' );
define( 'LOGGED_IN_KEY',    'vEor1Rno/f~_oFz0=_ha`|gy n!1m2#;b}X-;JMBlZJufnjx-_d>@Ysi<gZW:.=i' );
define( 'NONCE_KEY',        'qyq(>*4ZM!Gv<w54YqF`P0IT*3zA.7[950*M[qdty%GB+1wvsugN&#eF*w.i2a,i' );
define( 'AUTH_SALT',        'TGv8Y?J*N!Pw>i9 /5dG{pG+76Nn=CP5x.nVNaXYZn2F!WV+UrXtXvTHLAgp,Q&Q' );
define( 'SECURE_AUTH_SALT', 'uaYpUT8eM&<ys4:V=TsRjO,5mTEFa1DWg4mHvnC<g~ii<}C&T~2jd=n2KW0p yR:' );
define( 'LOGGED_IN_SALT',   '&yDvg`4%|%B:K%5Y;vftz,l}ULta]~rr3k;)rB>xc8}| 8U;K{XJ&(97O9.K`c)>' );
define( 'NONCE_SALT',       'V,h+G+Y,{@K?#H^V6pM{|(,/4q3mYCm@AG3#NiEAq-Z@]LJ:rYt%$UB7UKAnjB/)' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';