<?php get_header(); ?>

<div id="directory">
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 no-padding advanced-search">
            <div><h2 class="middle-title">慈善机构名册</h2>
                <div class="text-center description">We work with or have come in confect with lots of other
                    great ...
                </div>
                <div class="search-box row">
                    <div class="col-sm-offset-4 col-xs-offset-3 col-sm-4 col-xs-6 no-padding search-box-container">
                        <input type="text">
                        <button><img
                                    src="<?php bloginfo('template_url'); ?>/images/home/icon_search_small_focused.png"
                                    alt=""></button>
                    </div>
                    <div class="col-sm-offset-4 col-xs-offset-3 col-sm-4 col-xs-6 no-padding search-type">
                        <button>高级搜索 &gt;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 no-padding charities-list">
            <div>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'numberposts' => 4,
                    'category_name' => 'directory_zh', // returns all posts,
                );
                $posts = get_posts($args);
                ?>
                <?php foreach ($posts as $post): ?>
                    <?php $custom_fields = get_post_custom($post->ID); ?>
                    <?php
                    $charityName = $custom_fields['charityName'][0];
                    $charityAddress = $custom_fields['charityAddress'][0];
                    $charityPhone = $custom_fields['charityPhone'][0];
                    $img = get_field("img", $post->ID);
                    $content = $post->post_content;
                    $tags = get_the_tags($post->ID);
                    ?>
                    <div class="row charities">
                        <div class="col-xs-2 no-padding"><img src="<?php echo $img['url']; ?>" alt="charity-img"/>
                        </div>
                        <div class="col-xs-10 no-padding"><h5 class="charity-name"><a href="<?php  the_permalink($post->ID); ?>"><?php echo $charityName; ?></a></h5>
                            <div class="charity-info">
                                <div><i class="fa fa-home" aria-hidden="true"></i><span
                                            class="span"><?php echo $charityAddress; ?></span>
                                </div>
                                <div><i class="fa fa-phone" aria-hidden="true"></i><span
                                            class="span"><?php echo $charityPhone; ?></span>
                                </div>
                                <div><p class="span"><?php echo $content; ?></p>
                                </div>
                                <div>
                                    <?php foreach ($tags as $tag) : ?>
                                        <span class="tag"><?php echo $tag->name; ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="pagination-project">
                    <ul class="pagination">
                        <li class=""><a><i class="fa fa-chevron-left"></i></a></li>
                        <li class=""><a name="1"> 1 </a></li>
                        <li class=""><a name="2"> 2 </a></li>
                        <li class=""><a name="3"> 3 </a></li>
                        <li class=""><a><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
