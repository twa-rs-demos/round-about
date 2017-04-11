<?php get_header(); ?>

  <script src="<?php bloginfo('template_url'); ?>/js/jssor.slider-22.2.16.mini.js" type="text/javascript"></script>

  <script type="text/javascript">
    jQuery(document).ready(function ($) {

      var jssor_1_options = {
        $AutoPlay: false,
        $AutoPlaySteps: 4,
        $SlideDuration: 160,
        $SlideWidth: 200,
        $SlideSpacing: 3,
        $Cols: 4,
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$,
          $Steps: 4
        },
        $BulletNavigatorOptions: {
          $Class: $JssorBulletNavigator$,
          $SpacingX: 1,
          $SpacingY: 1
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      function ScaleSlider() {
        var refSize = $('.picture').width();
        if (refSize) {
          refSize = Math.min(refSize, 10000);
          jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
          window.setTimeout(ScaleSlider, 30);
        }
      }

      ScaleSlider();
      $(window).bind("load", ScaleSlider);
      $(window).bind("resize", ScaleSlider);
      $(window).bind("orientationchange", ScaleSlider);
    });

  </script>


<?php
$id = get_the_ID();
$content = get_post($id);
$title = $content->post_title;
$image = get_field('img', $post->ID);

$categories = get_the_category();
$posts = get_posts(array('posts_per_page' => 6,
  'category__in' => array($categories[0]->cat_ID)));
if (sizeof($posts) < 4) {
  echo "
  <script type=\"text/javascript\">
  $(document).ready(function() {
    $('.drag').attr('class', 'hide drag');
 });
  </script>
  ";
} else {
  echo "
  <script type=\"text/javascript\">
  $(document).ready(function() {
    $('.drag').attr('class', 'drag');
 });
  </script>
  ";
}
?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div id="article">
      <div class="row" style="overflow: hidden; position: relative;">

        <div class="article-footer col-sm-offset-2">
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

        <div class="col-sm-offset-2 col-sm-8">
          <div class="article-header"><h1 class=""><?php
              echo $title; ?></h1></div>


          <div class="picture">
            <div class="bigger-img"><img src="<?php echo $image['url']; ?>"></div>
          </div>

          <div id="jssor_1" class="drag">
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:150px;overflow:hidden;">
              <?php
              foreach ($posts as $post) {
                $image_info = get_field('img', $post->ID);
                ?>
                <div>
                  <a href="<?php the_permalink($post->ID); ?>">
                    <img src="<?php echo $image_info['url']; ?>" data-u="image">
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