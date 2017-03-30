<?php get_header(); ?>

<div id="partners">
  <div class="max-picture row">
    <div class="picture-max"
         style="background-repeat: no-repeat; background-size: cover; background-image: url(&quot;/wp-content/themes/spike/images/partners/hero_partner.png&quot;); background-position: center center;">
      <div class="content-on-picture"><h3 class="title">SANTA FE SUPPRTS
          <br>CHILDHOOD EDUCATION EQUALITY
        </h3>
        <p class="statement">Roundabout is a social enterprise headed by volunteers. We provide a free service
          connecting those who wish to give, be </p>
        <div class="text-right">
          <button class="read-more">阅读更多</button>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content">
    <div class="more-stories text-right"><a href="#">更多合作伙伴故事 &gt;</a></div>
    <div class="row same-family">
      <div class="col-sm-offset-3 col-sm-6 no-padding">
        <div><h2 class="middle-title">众爱与合作伙伴同是一家人</h2>
          <div class="partners-logo">
            <div class="row">
              <div class="col-sm-4 text-center"><img class="image-border"
                                                     src="<?php bloginfo('template_url'); ?>/images/partners/logo_china culiure center.png"
                                                     alt="">
                <div class="logo-name">China Culiure Center</div>
              </div>
              <div class="col-sm-4 text-center"><img class="image-border"
                                                     src="<?php bloginfo('template_url'); ?>/images/partners/logo_children_house.png"
                                                     alt="">
                <div class="logo-name">Children's House Montessori Kindergarten</div>
              </div>
              <div class="col-sm-4 text-center"><img class="image-border"
                                                     src="<?php bloginfo('template_url'); ?>/images/partners/logo_city wise.png"
                                                     alt="">
                <div class="logo-name">City Wise</div>
              </div>
            </div>
            <div class="row second-row">
              <div class="col-sm-3 text-center logo"><img class="image-border"
                                                          src="<?php bloginfo('template_url'); ?>/images/partners/logo_AGS.png"
                                                          alt="">
                <div class="logo-name">AGS</div>
              </div>
              <div class="col-sm-3 text-center logo"><img class="image-border"
                                                          src="<?php bloginfo('template_url'); ?>/images/partners/logo_AGS.png"
                                                          alt="">
                <div class="logo-name">AGS</div>
              </div>
              <div class="col-sm-3 text-center logo"><img class="image-border"
                                                          src="<?php bloginfo('template_url'); ?>/images/partners/logo_AGS.png"
                                                          alt="">
                <div class="logo-name">AGS</div>
              </div>
              <div class="col-sm-3 text-center logo"><img class="image-border"
                                                          src="<?php bloginfo('template_url'); ?>/images/partners/logo_AGS.png"
                                                          alt="">
                <div class="logo-name">AGS</div>
              </div>
              <div class="col-sm-3 text-center logo"><img class="image-border"
                                                          src="<?php bloginfo('template_url'); ?>/images/partners/logo_AGS.png"
                                                          alt="">
                <div class="logo-name">AGS</div>
              </div>
              <div class="col-sm-3 text-center logo"><img class="image-border"
                                                          src="<?php bloginfo('template_url'); ?>/images/partners/logo_AGS.png"
                                                          alt="">
                <div class="logo-name">AGS</div>
              </div>
              <div class="col-sm-3 text-center logo"><img class="image-border"
                                                          src="<?php bloginfo('template_url'); ?>/images/partners/logo_AGS.png"
                                                          alt="">
                <div class="logo-name">AGS</div>
              </div>
              <div class="col-sm-3 text-center logo"><img class="image-border"
                                                          src="<?php bloginfo('template_url'); ?>/images/partners/logo_AGS.png"
                                                          alt="">
                <div class="logo-name">AGS</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row become-partner">
      <div class="col-sm-offset-3 col-sm-6 no-padding">
        <div><h2 class="middle-title no-padding">成为我们的合作伙伴</h2>
          <div class="partner-form">
            <?php $form = get_post(1904);
            echo do_shortcode($form->post_content);
            ?>
          </div>
          <div class="hide form-success-info" id="form-success-info">
            <i class="fa fa-times close-form-icon"></i>
            <span class="success-info">Thank you for your interest in partnering with RoundAbout. We will be contact you soon.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

