<?php get_header(); ?>

<link href="<?php bloginfo('template_url'); ?>/css/dragdealer.css" rel="stylesheet" type="text/css">
<script src="<?php bloginfo('template_url'); ?>/js/dragdealer.js"></script>

<script type="text/javascript">
  $(function () {
    new Dragdealer('image-carousel', {
      steps: 4,
      speed: 0.3,
      loose: true
    });
  })
</script>

<?php
$id = get_the_ID();
$content = get_post($id);
$title = $content->post_title;
$image = get_field('img', $post->ID);

$categories = get_the_category();
$posts = get_posts(array('posts_per_page' => 4,
  'category__in' => array($categories[0]->cat_ID)));
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div id="article">
    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 ">
        <div class="article-header"><h1 class=""><?php
            echo $title; ?></h1></div>

        <div class="article-footer">
          <?php $category = get_the_category();
          $categoryIDS = $category->term_id;
          ?>
          <div class="pre-and-next">
            <?php if (get_previous_post($categoryIDS)) {
              previous_post_link("上一篇： %link", "%title", true);
            } else {
              echo "上一篇：没有了，已经是最后文章";
            } ?>
          </div>
          <div class="pre-and-next">
            <?php if (get_next_post($categoryIDS)) {
              next_post_link("下一篇： %link", "%title", true);
            } else {
              echo "下一篇：没有了，已经是最新文章";
            } ?>
          </div>
        </div>

        <div class="picture">
          <div class="bigger-img"><img src="<?php echo $image['url']; ?>"></div>
        </div>

        <div id="image-carousel" class="dragdealer">
          <div class="handle">
            <?php
            foreach ($posts as $post) {
              $image_info = get_field('img', $post->ID);
              ?>
              <div class="slide">
                <a href="<?php the_permalink($post->ID); ?>">
                  <img src="<?php echo $image_info['url']; ?>">
                </a>
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="article-content"><?php
          the_content($more_link_text, $stripteaser);
          ?>
        </div>

      </div>
    </div>
  </div>

</article>

<?php get_footer(); ?>
