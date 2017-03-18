<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  $id = get_the_ID();
  $content = get_post($id);
  $title = $content->post_title;
  ?>

  <div id="article">
    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 ">
        <div class="article-header"><h1 class=""><?php
            echo $title; ?></h1></div>
        <div class="picture">
          <div class="bigger-img"><img src="<?php bloginfo('template_url'); ?>/images/article/article_banner.png"></div>
        </div>
        <div class="article-content"><?php
          the_content($more_link_text, $stripteaser);
          ?>
        </div>
        <div class="article-footer">
          <div class="pre-and-next">
            <?php if (get_previous_post()) {
              previous_post_link("上一篇: %link", "%title", true);
            } else {
              echo "上一篇：没有了，已经是最后文章";
            } ?>
          </div>
          <div class="pre-and-next">
            <?php if (get_next_post()) {
              next_post_link("下一篇: %link", "%title", true);
            } else {
              echo "下一篇：没有了，已经是最新文章";
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</article>

<?php get_footer(); ?>
