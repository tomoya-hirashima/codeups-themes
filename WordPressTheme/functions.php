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
        'custom_dashboard_widget', // ウィジェットID
        'コンテンツ追加・更新',           // タイトル
        'custom_dashboard_widget_display' // 表示内容のコールバック関数
    );
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');

// ウィジェットの中身を定義
function custom_dashboard_widget_display() {
    ?>
<div class="custom-dashboard-box">
  <a href="./wp-admin/post-new.php" class="widget-button widget-button--blue">＋ブログ新規追加</a>
  <a href="./wp-admin/edit.php?post_type=campaign" class="widget-button widget-button--green">キャンペーン一覧</a>
  <a href="./wp-admin/post-new.php?post_type=voice" class="widget-button widget-button--purple">お客様の声 新規追加</a>
</div>
<?php
}