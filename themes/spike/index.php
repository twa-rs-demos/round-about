<?php get_header(); ?>
<?php
function wpjam_add_styles() {
    wp_register_script('test',get_template_directory_uri() .'/test.js',array( 'jquery' ), '1.0', true );
    wp_enqueue_script('test');
}

add_action( 'wp_enqueue_scripts', 'wpjam_add_styles' );
?>




<div id="home" class="container-fluid no-padding">
  <div class="picture-max"
       style="background-repeat: no-repeat; background-size: cover; background-image: url(&quot;/wp-content/themes/spike/images/home/hero_index.png&quot;); background-position: center center;">
    <h2 class="home-text">我们愿意把爱分享给每个需要帮助的孩子</h2>
  </div>

  <div id="video">
    <div class="we-are-ra"><h2 class="middle-title">我们是众爱</h2></div>
    <p class="middle-describe">众爱是连接捐款人和受助人的桥梁</p>
    <div class="video home-video row">
      <div class="col-md-offset-2 col-md-8 col-xs-12">
        <embed src="http://player.youku.com/player.php/sid/XMTM1NjIyMTA0NA==/v.swf" type="application/x-shockwave-flash"
               class="video-content">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="ourwork-item"><h2 class="middle-title"> 我们的工作</h2>
      <p class="middle-describe"> 众爱在全种食品范围内支持个人救助的同时也与其它慈善机构合作救助</p></div>
    <div class="job-icons row">
      <div class="col-md-2 col-xs-6 icon-container a-work-icon col-md-offset-1">
        <div class="job-icons-container">
          <img
            src="<?php bloginfo('template_url'); ?>/images/home/icon_leukemia assistance_small.png"
            alt="白血病救助">
        </div>
        <p class="middle-describe">白血病救助</p></div>
      <div class="col-md-2 col-xs-6 icon-container">
        <div class="job-icons-container">
          <img
            src="<?php bloginfo('template_url'); ?>/images/home/icon_medical assistance_small.png"
            alt="医疗救助">
        </div>
        <p class="middle-describe">医疗救助</p></div>
      <div class="col-md-2 col-xs-6 icon-container">
        <div class="job-icons-container">
          <img
            src="<?php bloginfo('template_url'); ?>/images/home/icon_education support_small.png"
            alt="教育资助">
        </div>
        <p class="middle-describe">教育资助</p></div>
      <div class="col-md-2 col-xs-6 icon-container">
        <div class="job-icons-container">
          <img
            src="<?php bloginfo('template_url'); ?>/images/home/icon_disaster relief_small.png"
            alt="灾区救助">
        </div>
        <p class="middle-describe">灾区救助</p></div>
      <div class="col-md-2 col-xs-6 icon-container">
        <div class="job-icons-container">
          <img src="<?php bloginfo('template_url'); ?>/images/home/icon_community assistance_small.png" alt="社区帮扶"></div>
        <p class="middle-describe">社区帮扶</p></div>
    </div>
    <div class="ourwork-know-more">
      <a class="know-more-text" href="http://demo:8080/zh/ourwork_zh/">了解更多 &gt;</a>
    </div>
  </div>
</div>


<?php if (is_active_sidebar('sidebar-1')) : ?>
  <aside id="secondary" class="sidebar widget-area" role="complementary">
    <?php dynamic_sidebar('sidebar-1'); ?>
  </aside><!-- .sidebar .widget-area -->
<?php endif; ?>

<?php get_footer(); ?>

