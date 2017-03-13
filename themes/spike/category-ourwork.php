<?php get_header() ?>
<?php
pll_the_languages();
?>

<?php

$args = array();

$pages = get_pages();
foreach ($pages as $page) {
  $option = '<option value="' . get_page_link($page->ID) . '">';
  $option .= $page->post_title;
  $option .= '</option>';
  echo $option;
}
?>

<?php get_footer() ?>

