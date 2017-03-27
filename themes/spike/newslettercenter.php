<script src="<?php bloginfo('template_url'); ?>/js/auto-carousel.js"></script>
<?php
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$args = array(
    'posts_per_page' => 8,
    'category_name' => 'newsletter_center_zh',
    'paged' => $paged
);
$posts_query = new WP_Query($args);
$posts = $posts_query->posts;
$time = date('m');
$month_posts = array();
foreach ($posts_query->posts as $post) :
    setup_postdata($post);
    $every_time = substr($post->post_date, 5, 2);
    if ($time != $every_time) {
        break;
    } else {
        $month_posts[] = $post;
    }
endforeach;
$posts_query->posts = $month_posts;
$mongth_posts_length = sizeof($month_posts);
?>

<div id="medical-assistance" class="row">
    <div class="col-xs-12 no-padding">
        <div class="assistance-top">
            <div><h2 class="middle-title"><?php echo date('F Y'); ?></h2></div>
            <div class="assistence-pic-container row">
                <div class="slider col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                    <ul class="slider-main">
                        <?php
                        $length = $mongth_posts_length;
                        if ($length > 4) {
                            $length = 4;
                        }
                        while ($length-- > 0) {
                            $img = get_field("img", $month_posts[3-$length]->ID); ?>

                            <li class="slider-panel">
                                <img src="<?php echo $img['url']; ?>">
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="slider-extra">
                        <ul class="slider-nav">
                            <?php
                            $length_li = $mongth_posts_length;
                            if ($length_li > 4) {
                                $length_li = 4;
                            }

                            while ($length_li--) { ?>
                                <li class="slider-item"></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 assistance-describe"><p class=""></p>
            </div>
        </div>
    </div>
    <div class="col-sm-offset-1 col-sm-10 no-padding">
        <div class="volunteer-stories"><h2 class="middle-title"></h2>
            <div class="row text-center">
                <?php foreach ($month_posts as $post) :
                    $img = get_field("img", $post->ID); ?>
                    <div class="col-md-3 col-sm-4 col-xs-6 no-padding story-item"><img
                                src="<?php echo $img['url']; ?>"
                                class="story-picture">
                        <p>  <?php echo $post->post_title ?></p>
                        <a href="<?php the_permalink($post->ID); ?>"> Read more > </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="my-pagination pagination-style row">
                <?php page_pagination($posts_query); ?>
            </div>
        </div>
    </div>
</div>