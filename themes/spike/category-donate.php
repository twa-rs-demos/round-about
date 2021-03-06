<script type="text/javascript">
    $(document).ready(function () {
        $(".donate-guide-title").hover(function () {
            $('.donate-rules-box').attr("class", "donate-rules-box modal");
        });
        $(".close-btn").click(function () {
            $('.donate-rules-box').attr("class", "hide donate-rules-box modal");
        });

        $('.child-profile').hover(function () {
            $(this).css({
                "background-color": " #ec4c9a",
                "cursor": " pointer",
                "opacity": "0.5",
                "margin": "0"
            });
            $(this).next().css({
                "opacity": "1",
                "color": "#fff"
            });
        }, function () {
            $(this).css({"opacity": "0"});
            $(this).next().css({"opacity": "0"});
        });
    });

</script>

<div id="donate-page-index">
  <div class="picture-max row"
       style="background-repeat: no-repeat; background-size: cover; background-image: url('<?php bloginfo('template_url'); ?>/images/donate/hero_donate.png'); background-position: center center;">
    <div class="donate-img-text">
      <h2>“施比受更为有福。”</h2>
      <h3>—— St Francis of Assisi</h3>
    </div>
  </div>
  <div class="container">
    <div id="donate-way">
      <div class="donate-way-title">
        <h2 class="middle-title">捐款方式</h2>
      </div>
      <div class="row">
        <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-sm-4 col-xs-12 donate-item">
              <div id="donatethings" class=" donate ">
                <h3>物品捐赠</h3>
                <div class="row">
                  <ul class="col-xs-offset-3 col-xs-9">
                    <li><a class="donate-goods-item" href="#donate-guide-hash"> 捐赠指南</a></li>
                    <li><a class="donate-goods-item"
                           href="#donate-guide-collect-hash">捐赠物品代收点</a></li>
                    <li><a class="donate-goods-item"
                           href="#donate-guide-apply-hash">上门收取捐赠物品申请表</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 donate-item">
              <div id="donatemoney" class="donate">
                <h3 class="text-center">捐款</h3>
                <div class="row donate-money-margin">
                  <div class="col-xs-offset-1 col-xs-5">
                    <img class="img-center"
                         src="<?php bloginfo('template_url'); ?>/images/donate/wechat01.png"/>
                    <div class="span">Wechat</div>
                  </div>
                  <div class="col-xs-5"><a
                      href="http://www.ccafc.org.cn/templates/Donation/txxx.aspx?nodeid=5&projectid=3299&strname=&jiner=&notes_email="
                      target="_blank">
                      <div class="image-border"><img class="img-center"
                                                     src="<?php bloginfo('template_url'); ?>/images/donate/logo_ccafc.png"/>
                      </div>
                    </a>
                    <div class="span">CCAFC</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-offset-1 col-xs-5"><a
                      href="http://love.alipay.com/donate/itemDetail.htm?name=2015081315541167376"
                      target="_blank"><img class="img-center"
                                           src="<?php bloginfo('template_url'); ?>/images/donate/logo_alipay.png"/></a>
                    <div class="span">Alipay</div>
                  </div>
                  <div class="col-xs-5">
                    <div class="image-border"><img class="img-center"
                                                   src="<?php bloginfo('template_url'); ?>/images/donate/logo_paypal.png"/>
                      <div class="paypal-box hide">
                        <span class="paypal-close">x</span>
                        <div class="papay-account">
                          <h4>Paypal捐款账号</h4>
                          <p>paypal@ccafc.org.cn</h4></p>
                        </div>
                      </div>
                    </div>
                    <div class="span">Paypal</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 donate-item">
              <div id="donateProjects" class="donate">
                <h3>募捐项目</h3>
                <p class="middle-describe donate-projects-tect">直接通过乐捐捐款</p>
                <div class="wechat-image">
                  <img class="donateProjects-wechat"
                       src="<?php bloginfo('template_url'); ?>/images/donate/wechat01.png"/>
                  <div class="span">腾讯</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row donate-way-text">
            <div class="col-xs-12">We offer assistance by either directly passing on the items you have
              donated or by selling them in ourretail store to raise funds. Store proceeds pay for
              medical costs for orphans and others less fortunate,sheltered housing for the elderly,
              warm blankets, food and other basic needs items for distribution.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="item-donation" class="item-donation">
      <div class="item-donation-title">
        <h2 class="middle-title">物品捐赠</h2>
      </div>
      <div class="row">
        <div><img class="item-donation-img"
                  src="<?php bloginfo('template_url'); ?>/images/donate/Item donation.png"/></div>
      </div>

      <div class="donate-guide col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12 no-padding"
           id="donate-guide-hash"><h3
          class="donate-items-title"><a class="donate-guide-title">捐赠指南</a></h3>
        <div id="donate-things-rules">
          <div tabindex="-1" role="dialog" class="modal donate-rules-box hide">
            <div class="modal-dialog">
              <div class="modal-content" role="document">
                <div class="modal-body">
                  <div class="col-xs-offset-12 col-xs-1">
                    <span class="close-btn">X</span>
                  </div>
                  <h2>我们不接受的物品</h2>
                  <ul>
                    <li>Open, prescription and out of date medicines.</li>
                    <li>Used underwear, including socks.</li>
                    <li>Anything previously used by an animal – such as a dog’s bed</li>
                    <li>Copies of magazines over 6 months old.</li>
                    <li>Computers, monitors and printers over 4 years old.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-offset-2 col-xs-offset-1 col-md-8 col-xs-10 donate-guide-content"><p>Open,
            prescription and out of date medicines.</p>
          <p>Used underwear, including socks.</p>
          <p>Anything previously used by an animal – such as a dog’s bed</p>
          <p>Copies of magazines over 6 months old.</p>
          <p>Computers, monitors and printers over 4 years old.</p></div>
      </div>
      <div class="row">
        <div id="donate-guide-collect-hash"
             class="col-md-offset-1 col-md-10 col-xs-12 donate-collect-items">
          <div>
            <h3 class="donate-items-title">捐赠物品代收点</h3>
            <div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">Roundabout Store</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info">+86 137 1805 3814 ( for directions in Chinese )</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Sunday 24hours</span></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">CCAFC office</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info">86 10 5166 0112</span></div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Friday 9am - 5pm</span></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">Zarah Cafe</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info"> 86 10 8403 9807</span></div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Sunday 24hours</span></div>
                </div>
              </div>
            </div>
            <div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">Tuan Jie Hu Community Recycle Station</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info"> 86 10 139 1075 9629</span></div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Sunday 24hours</span></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">OASIS Hospital</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info">86 10 59850405</span></div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Friday 9am - 5pm</span></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">Riviera Clubhouse</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info">86 10 8450 6888</span></div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Sunday 6am - 10pm</span></div>
                </div>
              </div>
            </div>
            <div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">Bo Ya School</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info">86 10 158 1128 6996</span></div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Sunday 9am - 5pm</span></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">BIBA</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">SCOUT Real Estate</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info">86 10 8596 8873</span></div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Friday 9am - 6pm</span></div>
                </div>
              </div>
            </div>
            <div>
              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                  <div class="item-title">Shine Hills</div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_address_small.png"/></span><span
                      class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                  </div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_phone_small.png"/></span><span
                      class="contact-info">86 10 6144 5671</span></div>
                  <div><span class="content-icon"><img
                        src="<?php bloginfo('template_url'); ?>/images/donate/icon_time_small.png"/></span><span
                      class="contact-info">Monday - Sunday 10am - 8:30pm</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="donate-guide-apply row">
        <div id="donate-guide-apply-hash"
             class="container donate-guide-apply col-xs-12 col-md-offset-1 col-md-10">
          <h3 class="donate-items-title">申请上门收取捐赠物品</h3>
          <div class="apply-extra-info">Thank you for requesting a pick up of your donations, we will try
            our best to help.Please start by filling in the pick up request form. One of our staff will
            then contact you to make arrangements for the pick up. Please allow 2 business days for us
            to respond, as
            we have a small staff.
            **Due to the nature of Beijing traffic, we cannot guarantee an exact pick-up time. We will
            strive to arrive within a 1-hour window and call you if our driver is running late.Thank you
            for giving us as much notice as possible. The more notice you give us, the more likely we
            will be to have vans and trucks available at your preferred time.**
            Large items of furniture – monetary donation not necessary
          </div>
          <div class="col-sm-offset-4 col-xs-offset-0 col-sm-4 col-xs-12 apply-collect-items">
            <button class="apply-button js-open-box" data-toggle="modal"
                    data-target="#request-pick-up-for-donations-form">上门收取捐赠物品申请表
            </button>
          </div>

          <div class="modal fade caldera-forms" id="request-pick-up-for-donations-form" tabindex="-1" role="dialog"
               aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog form-modal round-about-form">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                  </button>
                </div>
                <div class="modal-body">
                  <?php $form = get_post(1277);
                  echo do_shortcode($form->post_content);
                  ?>
                </div>
              </div>
              <div class="hide form-success-info">
                <span class="normal-success-info">提交成功</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="donating-projects" id="donate-demo">
      <div class="donating-middle-text">
        <h2 class="middle-title">正在捐款的项目</h2>
      </div>
      <div class="row">
        <div class="col-md-offset-1 col-md-10" id="donate-template">
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
                <a class="child-profile"></a>
                <p class="child-profile-p"><?php echo $profile; ?></p>
                <div class="child-profile-text">
                  <h4><?php echo $name; ?>，<?php echo $age; ?>岁</h4>
                  <p><?php echo $disease; ?></p>
                  <p>需要&nbsp;￥<?php echo $money; ?></p>
                  <p class="pink"><a href="<?php the_permalink($post->ID); ?>">阅读更多 &gt;</a></p>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-1 col-md-10 col-xs-12 col-sm-10">
          <div class="my-pagination pagination-style col-sm-10 col-xs-offset-1 col-xs-8">
            <?php page_pagination($posts_query); ?>
          </div>
          <div class="text-right pagination-style col-sm-2 col-xs-3">
            <div class="donate-project-more pink"><a
                href="http://demo:8080/?page_id=249&lang=zh">更多&gt;</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
