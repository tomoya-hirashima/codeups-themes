<?php

// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

function my_theme_enqueue_assets()
{
  // Google Fonts
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@100;400;700&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap',
    [],
    null
  );
  // preconnect (Google Fonts)
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";

  // Swiper CSS
  wp_enqueue_style(
    'swiper',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    [],
    '11'
  );

  // Theme CSS
  wp_enqueue_style(
    'theme-style',
    get_theme_file_uri('assets/css/style.css'),
    [],
    filemtime(get_theme_file_path('assets/css/style.css'))
  );

  // jQuery (from CDN)
  wp_enqueue_script(
    'jquery-cdn',
    'https://code.jquery.com/jquery-3.6.0.js',
    [],
    '3.6.0',
    true
  );

  // Swiper JS
  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    [],
    '11',
    true
  );

  // jQuery Inview
  wp_enqueue_script(
    'jquery-inview',
    get_theme_file_uri('/assets/js/jquery.inview.min.js'),
    ['jquery-cdn'],
    filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')),
    true
  );

  // Theme JS
  wp_enqueue_script(
    'theme-script',
    get_theme_file_uri('/assets/js/script.js'),
    ['jquery-cdn'],
    filemtime(get_theme_file_path('/assets/js/script.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// WP-PageNaviのCSSを読み込まないようにする
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-pagenavi');
}, 20);

// GA4タグを<head>内に追加
function add_ga4_tag_to_head()
{
?>
<!-- Google Analytics GA4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-39DVDLERG5"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-39DVDLERG5');
</script>
<?php
}
add_action('wp_head', 'add_ga4_tag_to_head');

// Google Search Console の認証タグを <head> に追加
function add_gsc_meta_tag()
{
  echo '<meta name="google-site-verification" content="49mLXMAruyrjPXCaUaN1qkhXccO7FFnuEE-NXOYgqJE" />' . "\n";
}
add_action('wp_head', 'add_gsc_meta_tag');


// meta情報
add_filter('pre_get_document_title', function ($title) {
  if (is_post_type_archive('voice')) {
    return 'お客様の声一覧｜CodeUps';
  }
  if (is_post_type_archive('campaign')) {
    return 'キャンペーン情報｜CodeUps';
  }
  if (is_home()) { // 投稿ページ（blog）のアーカイブ
    return 'ブログ一覧｜CodeUps';
  }
  return $title;
});

// <meta name="description"> をアーカイブページに出力
add_action('wp_head', function () {
  if (is_post_type_archive('voice')) {
    echo '<meta name="description" content="CodeUpsで体験されたお客様の声を掲載しています。初心者の方の感想や満足度の高いレビューをチェックいただけます。">' . "\n";
  }
  if (is_post_type_archive('campaign')) {
    echo '<meta name="description" content="お得なキャンペーン情報を随時更新中。体験ダイビングやライセンス講習の割引情報はこちら。">' . "\n";
  }
  if (is_home()) {
    echo '<meta name="description" content="CodeUpsのブログ一覧です。ダイビングの楽しみ方や季節の海の様子、スタッフのおすすめ情報などを発信中。">' . "\n";
  }
});



// ラベルを投稿→ブログに変更
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

// ページネーション・記事数の変更
function change_posts_per_page_by_post_type($query)
{
  if (!is_admin() && $query->is_main_query()) {
    if (is_post_type_archive('campaign')) {
      $query->set('posts_per_page', 4); // キャンペーン一覧は4件
    }

    // タクソノミー「campaign_category」のアーカイブ（taxonomy-campaign_category.php）
    if (is_tax('campaign_category')) {
      $query->set('posts_per_page', 4);
    }

    if (is_post_type_archive('voice')) {
      $query->set('posts_per_page', 6); // お客様の声一覧は6件
    }

     // タクソノミー「voice_category」のアーカイブ（taxonomy-voice_category.php）
    if (is_tax('voice_category')) {
      $query->set('posts_per_page', 6);
    }

  }
}
add_action('pre_get_posts', 'change_posts_per_page_by_post_type');

// Breadcrumb NavXTの出力からhomeリストアイテムを削除
function custom_bcn_display_list_items($html)
{
  // 正規表現で<li class="home"></li>を削除
  $html = preg_replace('/<li class="home"><\/li>/', '', $html);
  return $html;
}
add_filter('bcn_display_list_items', 'custom_bcn_display_list_items', 10);

// Uncategorizedを非表示
function bcn_remove_uncategorized($trail)
{
  if (!is_single()) return $trail; // 投稿ページ以外は処理しない

  foreach ($trail->breadcrumbs as $key => $crumb) {
    // 未分類カテゴリを除外（スラッグが "uncategorized" のとき）
    if (isset($crumb->taxonomy) && $crumb->taxonomy === 'category' && $crumb->term->slug === 'uncategorized') {
      unset($trail->breadcrumbs[$key]);
    }
  }

  // 配列のキーを再振り直し
  $trail->breadcrumbs = array_values($trail->breadcrumbs);

  return $trail;
}
add_filter('bcn_after_fill', 'bcn_remove_uncategorized');



// 記事を開いたときにviewsを1増やす
function set_post_views($postID)
{
  $count_key = 'views'; // フィールド名を指定
  $count = get_post_meta($postID, $count_key, true);

  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key); // 念のため初期化
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}

// WordPressの既存のメタ情報（アイキャッチとか）にviewを表示させないようにする（オプション）
function track_post_views($post_id)
{
  if (!is_single()) return;
  if (empty($post_id)) {
    global $post;
    $post_id = $post->ID;
  }
  set_post_views($post_id);
}
add_action('wp_head', 'track_post_views');

// 全てのContact Form 7の出力に対してwpautopを無効にする
add_filter('wpcf7_autop_or_not', '__return_false');


// 独自ログインURL（例: /my-login）でログインページを表示
function custom_login_url()
{
  $request_uri = $_SERVER['REQUEST_URI'];

  // /my-login にアクセスされた場合、wp-login.php を読み込む
  if (strpos($request_uri, '/my-login') !== false) {
    require_once ABSPATH . 'wp-login.php';
    exit;
  }
}
add_action('init', 'custom_login_url');


// 管理画面用CSSを読み込む
function load_custom_admin_styles($hook) {
    // ダッシュボードだけに絞る場合は以下条件を追加:
    // if ('index.php' !== $hook) return;

    wp_enqueue_style(
        'custom_admin_css',
        get_template_directory_uri() . '/admin-style.css',
        array(),
        filemtime(get_template_directory() . '/admin-style.css') // キャッシュ対策
    );
}
add_action('admin_enqueue_scripts', 'load_custom_admin_styles');


// ダッシュボードにコンテンツ更新のウィジェットを追加
function add_custom_dashboard_widget() {
  wp_add_dashboard_widget(
    'image_dashboard_widget', // ウィジェットID
    '画像変更',           // タイトル
    'image_dashboard_widget_display' // 表示内容のコールバック関数
  );

    wp_add_dashboard_widget(
      'custom_dashboard_widget', // ウィジェットID
      'コンテンツ追加・更新',           // タイトル
      'custom_dashboard_widget_display' // 表示内容のコールバック関数
    );

    wp_add_dashboard_widget(
      'page_dashboard_widget', // ウィジェットID
      '固定ページ',           // タイトル
      'page_dashboard_widget_display' // 表示内容のコールバック関数
  );

}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');

// 画像ウィジェットの中身を定義
function image_dashboard_widget_display() {
  ?>
  <div class="custom-dashboard-box">
    <a href="../wp-admin/post.php?post=12&action=edit" class="widget-button widget-button--yellow">
      <p>トップページ画像<br>〜追加・編集〜</p>
      <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/slider-icon.svg" alt="トップスライダー画像 編集"></div>
    </a>
    <a href="../wp-admin/post.php?post=16&action=edit" class="widget-button widget-button--yellow">
      <p>ギャラリー画像<br>〜追加・編集〜</p>
      <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery-icon.svg" alt="ギャラリー  編集"></div>
    </a>
  </div>
  <?php
}

// コンテンツウィジェットの中身を定義
function custom_dashboard_widget_display() {
    ?>
<div class="custom-dashboard-box">
  <a href="../wp-admin/edit.php" class="widget-button">
    <p>ブログ記事一覧<br>〜追加・編集〜</p>
    <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/blog-icon.svg" alt="ブログ記事 追加"></div>
  </a>
  <a href="../wp-admin/edit.php?post_type=voice" class="widget-button">
    <p>お客様の声<br>〜追加・編集〜</p>
    <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/voice-icon.svg" alt="お客様の声 追加"></div>
  </a>
  <a href="../wp-admin/edit.php?post_type=campaign" class="widget-button">
    <p>キャンペーン一覧<br>〜追加・編集〜</p>
    <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/campaign-icon.svg" alt="キャンペーン編集"></div>
  </a>
  <a href="../wp-admin/post.php?post=20&action=edit" class="widget-button">
    <p>料金一覧<br>〜追加・編集〜</p>
    <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/price-icon.svg" alt="料金 編集"></div>
  </a>
  <a href="../wp-admin/post.php?post=22&action=edit" class="widget-button">
    <p>よくある質問<br>〜追加・編集〜</p>
    <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/faq-icon.svg" alt="よくある質問 編集"></div>
  </a>

</div>
<?php
}

// 固定ページウィジェットの中身を定義
function page_dashboard_widget_display() {
  ?>
  <div class="custom-dashboard-box">
    <a href="../wp-admin/post.php?post=318&action=edit" class="widget-button widget-button--gray">
      <p>プライバシーポリシー<br>〜編集〜</p>
      <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/privacy-icon.svg" alt="プライバシーポリシー編集"></div>
    </a>
    <a href="../wp-admin/post.php?post=321&action=edit" class="widget-button widget-button--gray">
      <p>利用規約<br>〜編集〜</p>
      <div class="widget-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/terms-icon.svg" alt="利用規約編集"></div>
    </a>
  </div>
  <?php
}



// タイトルタグの自動出力を有効にする（SEO SIMPLE PACKが使う）
add_theme_support( 'title-tag' );

// SEO SIMPLE PACKが期待通りに動かない場合の代替
add_filter( 'pre_get_document_title', function( $title ) {
  if ( is_single() ) {
      // 投稿ページの場合：投稿タイトル + サイト名
      $title = single_post_title( '', false ) . ' | ブログ | CodeUps';
  } elseif ( is_home() || is_archive() ) {
      // アーカイブやブログ一覧
      $title = 'ブログ | CodeUps';
  } elseif ( is_page() ) {
      // 固定ページ
      $title = get_the_title() . ' | CodeUps';
  } else {
      // その他
      $title = get_bloginfo( 'name' );
  }
  return $title;
});


// 管理者に限定して更新通知を表示させるようにする
function update_message_admin_only() {
  if(!current_user_can('administrator')) {	// 管理者ユーザー以外だった場合の処理を記述
    remove_action('admin_notices', 'update_nag', 3);
  }
}
add_action( 'admin_init', 'update_message_admin_only' );


// 管理画面カスタム(料金一覧の数値入力を整数に限定)
  function admin_custom_number_input_js() {
    ?>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // 「license_price」の入力欄だけを対象に、かつ「SCFの繰り返しフィールド内」に限定
        const inputs = document.querySelectorAll(
           '.smart-custom-fields-field-group input[name$="_price]"]'
        );
        inputs.forEach(function (input) {
          input.setAttribute('type', 'number');
          input.setAttribute('min', '0');
          input.setAttribute('step', '1');
        });
      });
    </script>
    <?php
  }
  add_action('admin_footer', 'admin_custom_number_input_js');


/* ===========================
 * 投稿一覧にアイキャッチ画像を右端に追加
 * =========================== */

// 投稿タイプごとのカラム追加（右端に画像）
function add_thumbnail_column($columns) {
  return array_merge($columns, ['thumbnail' => '画像']);
}

// 投稿タイプごとの画像表示
function display_thumbnail_column($column_name, $post_id) {
  if ($column_name === 'thumbnail') {
      if (has_post_thumbnail($post_id)) {
          echo get_the_post_thumbnail($post_id, [60, 60], ['style' => 'border-radius: 4px;']);
      } else {
          echo '画像なし';
      }
  }
}

// カラム追加の対象投稿タイプ
$custom_post_types = ['post', 'campaign', 'voice'];

foreach ($custom_post_types as $post_type) {
  add_filter("manage_{$post_type}_posts_columns", 'add_thumbnail_column');
  add_action("manage_{$post_type}_posts_custom_column", 'display_thumbnail_column', 10, 2);
}

// 管理画面CSSで右寄せ（共通）
function admin_custom_thumbnail_css() {
  echo '<style>
      .column-thumbnail {
          text-align: right;
          padding-right: 10px;
      }
  </style>';
}
add_action('admin_head', 'admin_custom_thumbnail_css');
