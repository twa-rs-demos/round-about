<?php get_header(); ?>
<div id="get-involved" class="row">
  <div>
    <div class="picture-max">
      <img class="get-involved-img" src="<?php bloginfo(template_url); ?>/images/getInvolved/hero_getInvolved.png" alt="hero_getInvolved">
    </div>
  </div>
  <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10 no-padding">
    <div class="get-involved-welcome">
      <h2 class="middle-title">欢迎来到众爱大家庭</h2>
      <div class="row">
        <div class="col-sm-6 text-left get-involved-item">
          <div class="child"><img src="<?php bloginfo(template_url); ?>/images/getInvolved/icon_volunteer.png"><a href="http://localhost:8080/zh/volunteer_zh/">加入志愿者行列</a></div>
        </div>
        <div class="col-sm-6 text-left get-involved-item" id="applyrescue">
          <div class="child"><img src="<?php bloginfo(template_url); ?>/images/getInvolved/icon_apply.png"><a
              href="https://jinshuju.net/f/RhPPwa" target="_blank">申请救助和支援</a></div>
        </div>
        <div class="col-sm-6 text-left get-involved-item" id="charities">
          <div class="child"><img src="<?php bloginfo(template_url); ?>/images/getInvolved/icon_support.png"><a href="http://localhost:8080/zh/getinvovled_zh/classifieds_zh/">合作与支持的慈善机构</a></div>
        </div>
        <div class="col-sm-6 text-left get-involved-item">
          <div class="child"><img src="<?php bloginfo(template_url); ?>/images/getInvolved/icon_donate.png"><a href="http://localhost:8080/zh/donate_zh/">捐赠</a></div>
        </div>
        <div>
          <div class="col-sm-6 text-left get-involved-item">
            <div class="child"><img src="<?php bloginfo(template_url); ?>/images/getInvolved/icon_support.png"><a href="http://localhost:8080/zh/directory_zh/">您的捐赠可以帮到谁</a></div>
          </div>
          <div class="col-sm-6 text-left get-involved-item" id="communitycenter">
            <div class="child"><img src="<?php bloginfo(template_url); ?>/images/getInvolved/icon_community center.png"><a href="http://localhost:8080/zh/communitycenter_zh/">社区中心</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$css_file='css/get-involved.css';
printf('<link rel="stylesheet" href="%s/%s">',get_template_directory_uri(),$css_file);
 ?>
<?php get_footer(); ?>