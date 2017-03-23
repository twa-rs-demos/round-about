<?php get_header() ?>

    <div id="get-involved-volunteer" class="row no-margin no-padding">
        <div class="col-xs-12 no-padding">
            <div class="picture-max"
                 style="background-repeat: no-repeat; background-size: cover; background-image: url(&quot;/wp-content/themes/spike/images/getInvolvedVolunteer/hero_volunteer.png&quot;); background-position: center center;"></div>
        </div>
        <div class="col-xs-12 no-padding">
            <div>
                <div class="involved-volunteer container"><h2 class="middle-title">我们是一个国际化的社区</h2>
                    <p>Roundabout is a social enterprise headed by volunteers. We provide a free service connecting
                        those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
                        were the first charity store in mainland China. We now give support to 48 charitable
                        organizations in the Beijing area and many more throughout China, Inner Mongolia and
                        Mongolia.</p></div>
                <div class="involved-volunteer-join"><h2 class="middle-title">快来加入我们吧</h2>
                    <button data-toggle="modal" data-target="#volunteers-application-form">现在申请成为志愿者</button>
                </div>
                <div class="modal fade caldera-forms" id="volunteers-application-form" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog form-modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    VOLUNTEERS APPLICATION FORM
                                </h4>
                            </div>
                            <div class="modal-body">
                                <?php $form = get_post(1234);
                                echo do_shortcode($form->post_content);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-offset-1 col-sm-10 col-xs-offset-0 col-xs-12 volunteer-countries"><h2
                            class="middle-title">来自<span
                                class="countries-quantity">50</span>多个国家和地区
                    </h2><img src="<?php bloginfo('template_url'); ?>/images/getInvolvedVolunteer/50 countries.png">
                </div>
            </div>
        </div>
        <div class="col-sm-offset-1 col-sm-10 no-pad    ding">
            <div class="volunteer-stories"><h2 class="middle-title">志愿者故事</h2>
                <div class="row text-center">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                    $args = array(
                        'posts_per_page' => 8,
                        'category_name' => 'volunteer_zh',
                        'paged' => $paged
                    );
                    $posts_query = new WP_Query($args);
                    $arr = $posts_query->posts;

                    foreach ($arr as $result) {
                        $title = $result->post_title;
                        $image = get_field('img', $result->ID);
                        ?>
                        <div class="col-md-3 col-sm-4 col-xs-6 no-padding story-item"><img
                                    src="<?php echo $image['url']; ?>"
                                    class="story-picture">
                            <p><?php echo $title; ?>
                            </p><a href="<?php  the_permalink($result->ID); ?>">Read More &gt;</a></div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="my-paginationcol-md-3 col-sm-4 col-xs-12 pagination-style">
                        <?php page_pagination($posts_query); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>