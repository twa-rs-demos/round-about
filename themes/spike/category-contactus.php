<?php get_header(); ?>

<div id="contact-us">
  <div id="title-picture"><h1 class="contact-us">CONTACT US</h1>
    <div class="map-contact">
      <div class="text-center"><img src="<?php bloginfo('template_url'); ?>/images/contactUs/map_contact us.png"></div>
    </div>
  </div>
  <div id="content-address">
    <div class="container">
      <div class="col-xs-offset-2 col-xs-7 address"><p>Address:Yuyang Road West,Off An Hua Road(Being Yosemite
          Villa Compound),Shunyi District.Open Time:Mon-Sat 9.30am-5.30pm Mobile Phone:137 1877 7761
          (English),137 1805 3814(Chinese Only)</p>
        <p>Email:<span
            class="email">Roundaboutvolunteer@yahoo.co.uk</span></p></div>
    </div>
    <div class="text-center"><img class="wechat-picture"
                                  src="<?php bloginfo('template_url'); ?>/images/contactUs/wechat03.png">
      <p class="wechat">Wechat</p></div>
  </div>
  <div class="touch">
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-2 col-sm-9 col-xs-12">
          <div class="contact-us-within-page-form">
            <?php $form = get_post(1877);
            echo do_shortcode($form->post_content);
            ?>
          </div>
          <div class="hide form-success-info">success</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
