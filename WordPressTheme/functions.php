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
    get_theme_file_uri('/assets/css/style.css'),
    [],
    filemtime(get_theme_file_path('/assets/css/style.css'))
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
  }
}
add_action('pre_get_posts', 'change_posts_per_page_by_post_type');

// Breadcrumb NavXTの出力からhomeリストアイテムを削除
function custom_bcn_display_list_items($html) {
  // 正規表現で<li class="home"></li>を削除
  $html = preg_replace('/<li class="home"><\/li>/', '', $html);
  return $html;
}
add_filter('bcn_display_list_items', 'custom_bcn_display_list_items', 10);