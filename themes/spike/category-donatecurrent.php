<div>
    <div class="donating-projects">
        <div class="donating-middle-text"><h2 class="middle-title">正在捐款的项目</h2></div>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'posts_per_page' => 8,
                    'category_name' => 'current_appeals_zh',
                    'paged' => $paged
                );
                $posts_query = new WP_Query($args);
                $posts = $posts_query->posts;
                ?>
                <?php foreach ($posts as $post): ?>
                    <?php $custom_fields = get_post_custom($post->ID); ?>
                    <?php
                    $name = $custom_fields['name'][0];
                    $age = $custom_fields['age'][0];
                    $disease = $custom_fields['disease'][0];
                    $profile = $custom_fields['profile'][0];
                    $money = $custom_fields['money'][0];
                    $img = get_field("img", $post->ID);
                    if ($name != null && $age != null && $disease != null && $profile != null && $money != null) :
                        ?>
                        <div class="col-md-3 col-sm-4 col-xs-6 donating-project"><img
                                    src="<?php echo $img['url']; ?>" alt="img"/>
                            <div class="child-profile"></div>
                            <p class="child-profile-p"><?php echo $profile; ?></p>
                            <div class="child-profile-text">
                                <h4><?php echo $name; ?>，<?php echo $age; ?>岁</h4>
                                <p><?php echo $disease; ?></p>
                                <p>需要&nbsp;<?php echo $money; ?></p>
                                <p class="pink"><a href="<?php the_permalink($post->ID); ?>">阅读更多 &gt;</a></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <div class="my-pagination col-sm-12 pagination-style">
                    <?php hehe($posts_query); ?>
                </div>
            </div>
        </div>
    </div>
</div>