<?php get_header(); ?>


<div id="medical-assistance" class="row">
    <div class="col-xs-12 no-padding">
        <div class="assistance-top">
            <div><h2 class="middle-title">灾区救助</h2></div>
            <div class="assistence-pic-container">
                <img
                        src="<?php bloginfo('template_url'); ?>/images/assistance/banner_store.png"></div>
            <div class="col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 assistance-describe"><p
                        class="css-wrap describe-p">RoundAbout is a social enterprise headed by volunteer. We provide a
                    free service connecting those who wish to give, be that monetary of otherwise,to those in need.
                    Started in 2008,we</p></div>
        </div>
    </div>
    <div class="col-sm-offset-1 col-sm-10 no-padding">
        <div class="volunteer-stories"><h2 class="middle-title"></h2>
            <div class="row text-center">

                <?php $category = get_category_by_slug('disasterrelief_zh');
                $args = array(
                    'category' => get_cat_ID($category->name),
                    'numberposts' => 8
                );
                $posts_array = get_posts($args);

                ?>

                <?php foreach ($posts_array as $post) : setup_postdata($post);
                    $img = get_field("img", $post->ID); ?>


                    <div class="col-md-3 col-sm-4 col-xs-6 no-padding story-item">
                        <img
                                src="<?php echo $img['url']; ?>"
                                alt="img"
                                class="story-picture">
                        <p><?php echo $post->post_title; ?></p>
                        <a href="<?php the_permalink($post->ID); ?>">Read More ></a>

                    </div>

                <?php endforeach; wp_reset_postdata(); ?>


            </div>
        </div>
        <div class="pagination-project">
            <ul class="pagination">
                <li class=""><a><i class="fa fa-chevron-left"></i></a></li>
                <li class=""><a name="1"><!-- react-text: 1875 --> <!-- /react-text --><!-- react-text: 1876 -->1
                        <!-- /react-text --></a></li>
                <li class=""><a name="2"><!-- react-text: 1879 --> <!-- /react-text --><!-- react-text: 1880 -->2
                        <!-- /react-text --></a></li>
                <li class=""><a name="3"><!-- react-text: 1883 --> <!-- /react-text --><!-- react-text: 1884 -->3
                        <!-- /react-text --></a></li>
                <li class=""><a><i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>
