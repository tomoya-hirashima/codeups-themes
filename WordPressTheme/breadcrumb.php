<nav class="breadcrumbs l-breadcrumbs<?php if (is_404()) echo ' l-404'; ?>" aria-label="パンくずリスト">
  <?php if (is_404()) : ?>
  <!-- 404ページの場合：innerなし、ul直 -->
  <ul class="breadcrumbs__items breadcrumbs__items--white">
    <?php if (function_exists('bcn_display')) : ?>
    <?php bcn_display(); ?>
    <?php endif; ?>
  </ul>
  <?php else : ?>
  <!-- 通常ページの場合：innerあり -->
  <div class="breadcrumbs__inner inner">
    <ul class="breadcrumbs__items">
      <?php if (function_exists('bcn_display')) : ?>
      <?php bcn_display(); ?>
      <?php endif; ?>
    </ul>
  </div>
  <?php endif; ?>
</nav>