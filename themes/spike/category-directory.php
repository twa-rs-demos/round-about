<div id="directory">
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 no-padding charity-roster">
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
                        <button class="advanced-search">高级搜索 &gt;</button>
                    </div>

                    <?php echo do_shortcode('[mdf_search_form id="1416"]');?>

                    <div class="static-modal hidden" id="filter">
                        <div tabindex="-1" role="dialog" class="modal" style="display: block;">
                            <div class="modal-dialog">
                                <div class="modal-content" role="document">
                                    <div class="modal-header">
                                        <div>
                                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title">筛选</h4></div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="location"><p>地点</p>
                                            <div>
                                                <button class="filter-button ">北京</button>
                                                <button class="filter-button ">上海</button>
                                                <button class="filter-button ">河北</button>
                                                <button class="filter-button ">河南</button>
                                                <button class="filter-button ">杭州</button>
                                                <button class="filter-button ">成都</button>
                                                <button class="filter-button ">甘肃</button>
                                                <button class="filter-button ">青海</button>
                                                <button class="filter-button ">广西</button>
                                            </div>
                                        </div>
                                        <div class="organization"><p>机构</p>
                                            <div>
                                                <button class="filter-button ">非营利</button>
                                                <button class="filter-button ">社会企业</button>
                                                <button class="filter-button ">营利</button>
                                            </div>
                                        </div>
                                        <div class="benefit"><p>受益</p>
                                            <div>
                                                <button class="filter-button ">孩子</button>
                                                <button class="filter-button ">老年人</button>
                                                <button class="filter-button ">白血病</button>
                                                <button class="filter-button ">癌症</button>
                                                <button class="filter-button ">灾难</button>
                                                <button class="filter-button ">HTV/AIDS</button>
                                                <button class="filter-button ">普通的</button>
                                                <button class="filter-button ">教育</button>
                                                <button class="filter-button ">流浪汉</button>
                                                <button class="filter-button ">其他</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 no-padding charities-list">
            <div>
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'posts_per_page' => 4,
                    'category_name' => 'directory_zh',
                    'paged' => $paged
                );
                $posts_query = new WP_Query($args);
                $posts = $posts_query->posts;

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
                        <div class="col-xs-2 no-padding">
                            <img src="<?php echo $img['url']; ?>" alt="charity-img"/>
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
                <div class="my-pagination col-xs-12 pagination-style">
                    <?php page_pagination($posts_query); ?>
                </div>
            </div>
        </div>
    </div>
</div>

