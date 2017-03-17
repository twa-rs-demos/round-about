<?php get_header() ?>

<script type="text/javascript">
    $(document).ready(function () {
        $(".I-want-donate").click(function () {
            $('.donate-box').attr("class", "donate-box");
        });
        $(".donate-x-close").click(function () {
            $('.donate-box').attr("class", "hidden donate-box");
        });
    });

</script>

<div id="ourwork-assistance">
    <div class="picture-max"
         style="background-repeat: no-repeat; background-size: cover; background-image: url(&quot;/wp-content/themes/spike/images/ourWorkAssistance/hero_leukemiaAssistance.png&quot;); background-position: center center;">

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'leukemia_assistance_zh'
        );
        $result = get_posts($args);
        $title = $result[0]->post_title;
        $custom_fields = get_post_custom($result[0]->ID);
        $profile = $custom_fields['profile'];
        ?>

        <div class="ourWorkAssistence-picture-text">
            <p class="span"><?php echo $profile[0] ?></p>
            <div class="ourWorkAssistence-picture-btn"><a class="story"
                                                          href="<?php the_permalink($result[0]->ID); ?>"><?php echo $title ?></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="text-right"><a class="ourWorkAssistence-picture-readMore"
                                   href="http://demo:8080/zh/%e5%8b%9f%e6%8d%90%e9%a1%b9%e7%9b%ae/">更多故事&gt; </a>
        </div>
    </div>
    <div>
        <div class="save-life-situation"><h2 class="middle-title">我们参与挽救的生命</h2>
            <div class="rescue-situation-img row">
                <div class="col-xs-12 col-md-3 col-md-offset-3 "><img
                            src="<?php bloginfo('template_url'); ?>/images/ourWorkAssistance/lives helped.png">
                </div>
                <div class="col-xs-12 col-md-3"><img
                            src="<?php bloginfo('template_url'); ?>/images/ourWorkAssistance/raised.png"></div>
            </div>
            <div class="row"><a href="/tw-ra/donate">
                    <button class="button-style"><a href="http://demo:8080/zh/donate_zh/"
                                                    class="no-decoration">参与挽救一个生命</a>
                    </button>
                </a></div>
        </div>
        <div class="fact-situation"><h2 class="middle-title">你知道吗？</h2>
            <p>理论上，中国的儿童白血病的治愈率超过<span>70%</span>
                。但是只有<span>20%</span>的孩子能活下来。</p>
            <p>影响治愈率的是缺乏的<span>资金</span>。
            </p><span> 你可以改变他们的命运。</span>
            <div class="fact-situation-graph"><img
                        src="<?php bloginfo('template_url'); ?>/images/ourWorkAssistance/cure rate.png"
                        class="donate-img">
                <div class="button-style">
                    <button class="I-want-donate">我要捐赠</button>
                    <div class="modal-dialog hidden donate-box">
                        <div class="modal-content" role="document">


                            <div class="modal-body">
                                <div class="col-xs-offset-11 col-xs-1"><span class="donate-x-close">X</span></div>
                                <div id="donatemoney" class="donate"><h3 class="text-center">捐款</h3>
                                    <div class="row donate-money-margin">
                                        <div class="col-xs-offset-1 col-xs-5"><img
                                                    src="<?php bloginfo('template_url'); ?>/images/wechat01.png"
                                                    class="img-center">
                                            <div class="span">Wechat</div>
                                        </div>
                                        <div class="col-xs-5"><a
                                                    href="http://www.ccafc.org.cn/templates/Donation/txxx.aspx?nodeid=5&amp;projectid=3299&amp;strname=&amp;jiner=&amp;notes_email="
                                                    target="_blank">
                                                <div class="image-border"><img
                                                            src="<?php bloginfo('template_url'); ?>/images/donate/logo_ccafc.png"
                                                            class="img-center"></div>
                                            </a>
                                            <div class="span">CCAFC</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-offset-1 col-xs-5"><a
                                                    href="http://love.alipay.com/donate/itemDetail.htm?name=2015081315541167376"
                                                    target="_blank"><img
                                                        src="<?php bloginfo('template_url'); ?>/images/donate/logo_alipay.png"
                                                        class="img-center"></a>
                                            <div class="span">Alipay</div>
                                        </div>
                                        <div class="col-xs-5">
                                            <div class="image-border"><img
                                                        src="<?php bloginfo('template_url'); ?>/images/donate/logo_paypal.png"
                                                        class="img-center"></div>
                                            <div class="span">Paypal</div>
                                        </div><!-- react-text: 1250 --><!-- /react-text --></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
