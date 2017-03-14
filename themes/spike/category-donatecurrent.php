<?php get_header(); ?>
<div>
    <div class="donating-projects">
        <div class="donating-middle-text"><h2 class="middle-title">正在捐款的项目</h2></div>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
<!--                <div class="col-md-3 col-sm-4 col-xs-6 donating-project"><img-->
<!--                            src="http://127.0.0.1/wp-content/uploads/2016/11/b73c2e887eefdca6327835131a4b8e93.jpg">-->
<!--                    <div class="child-profile"><p>这里是简介哦-。-！已经测试过长度的问题，不会越界的，放心哦^0^</p></div>-->
<!--                    <div class="child-profile-text"><h4>小黄，10岁</h4>-->
<!--                        <p>小黄</p>-->
<!--                        <p>需要&nbsp;￥10万</p>-->
<!--                        <p class="pink"><a href="/tw-ra/childstories?id=139">阅读更多 &gt;</a></p></div>-->
<!--                </div>-->
                <?php
                $args = array(
                    'post_type' => 'post',
                    'numberposts' => 8,
                    'category_name' => 'donatecurrent_zh', // returns all posts,
                );
                $posts = get_posts($args);
                ?>
                <?php foreach ($posts as $post): ?>
                    <?php $custom_fields = get_post_custom($post->ID); ?>
                    <?php
                    $name = $custom_fields['name'][0];
                    $age = $custom_fields['age'][0];
                    $disease = $custom_fields['disease'][0];
                    $profile = $custom_fields['profile'][0];
                    $money = $custom_fields['money'][0];
                    $img = get_field( "img", $post->ID );
                    if ($name != null && $age != null && $disease != null && $profile != null && $money != null) :
                        ?>
                        <div class="col-md-3 col-sm-4 col-xs-6 donating-project"><img src="<?php echo $img['url']; ?>" alt="img" />
                            <div class="child-profile"><p><?php echo $profile; ?></p></div>
                            <div class="child-profile-text">
                                <h4><?php echo $name; ?>，<?php echo $age; ?>岁</h4>
                                <p><?php echo $disease; ?></p>
                                <p>需要&nbsp;<?php echo $money; ?></p>
                                <p class="pink"><a href="<?php  the_permalink($post->ID); ?>">阅读更多 &gt;</a></p></div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row" id="pagination-project">
            <div class="col-md-offset-1 col-md-3 col-sm-5 col-xs-6 ">
                <div class="pagination-project">
                    <ul class="pagination">
                        <li class="disabled"><a><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a name="1">
                                1</a></li>
                        <li class=""><a name="2"> 2
                                </a></li>
                        <li class=""><a><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
