<?php get_header(); ?>

<div id="media-report">
  <div class="picture-max event-img">
    <img src="<?php bloginfo('template_url'); ?>/images/newsAndEvent/events.png">
  </div>
  <div class="ra-in-media container">
    <div><h2 class="middle-title">媒体眼中的众爱</h2></div>
    <div class="row media-data-content">
      <div class="col-md-offset-2 col-md-8">
        <?php
        $press = get_category_by_slug('press_zh');
        $posts = get_posts(array('posts_per_page' => 9,
          'category__in' => array($press->cat_ID)));
        foreach ($posts as $post) {
          $title = $post->post_title;
          $content = $post->post_content;
          $image = get_field('img', $post->ID);
          ?>
          <div class="col-md-4 col-sm-6 meida-item">
            <div class="media-img">
              <img src="<?php echo $image['url']; ?>" alt="img"/>
            </div>
            <div class="media-words">
              <h4 class="media-title pink">
                <a href="<?php the_permalink($post->ID); ?>">
                  <?php echo $title; ?>
                </a>
              </h4>
              <p class="css-wrap">
                <?php echo $content; ?>
              </p>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
  <div class="touch">
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-2 col-sm-9 col-xs-12">
          <div class="row touch-top-line">
            <div class="col-sm-8 col-xs-7">Get in Touch</div>
            <div class="col-sm-4 col-xs-5 pink">* Required Fields</div>
          </div>
          <form>
            <div class="row">
              <div class=" col-sm-6 col-xs-12 touch-item">
                <div class="col-md-12">First Name<span class="pink">*</span>
                </div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class=" col-sm-6 col-xs-12 touch-item">
                <div class="col-md-12">Company Last Name<span
                    class="pink">*</span></div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class=" col-sm-6 col-xs-12 touch-item">
                <div class="col-md-12">Email Address<span
                    class="pink">*</span></div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class=" col-sm-6 col-xs-12 touch-item">
                <div class="col-md-12">Telephone Number<span
                    class="pink">*</span></div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class=" col-sm-12 col-xs-12 touch-item">
                <div class="col-md-12">Enquiry<span class="pink">*</span>
                </div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class="col-xs-12 touch-item">
                <div class="col-xs-12">Description<span
                    class="pink">*</span></div>
                <div class="col-xs-10"><textarea rows="4" maxlength="200" required=""
                                                 class="col-xs-12 touch-textarea"></textarea></div>
              </div>
              <div class="col-md-2 col-xs-4">
                <button class="btn btn-default btn-md touch-button">取消</button>
              </div>
              <div class="col-md-2 xol-xs-4">
                <button class="btn btn-default btn-md touch-button button-click">提交</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>




<?php get_header(); ?>
<div id="media-report">
  <div class="picture-max event-img">
  </div>
  <div class="ra-in-media container">
    <div><h2 class="middle-title">媒体眼中的众爱</h2></div>
    <div class="row media-data-content">
      <div class="col-md-offset-2 col-md-8">
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img
              src="<?php bloginfo('template_url'); ?>/images/media-report/logo_children_house.png">
          </div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img
              src="<?php bloginfo('template_url'); ?>/images/media-report/logo_china culiure center.png"></div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img src="<?php bloginfo('template_url'); ?>/images/media-report/logo_city wise.png">
          </div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img
              src="<?php bloginfo('template_url'); ?>/images/media-report/logo_children_house.png">
          </div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img
              src="<?php bloginfo('template_url'); ?>/images/media-report/logo_china culiure center.png"></div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img src="<?php bloginfo('template_url'); ?>/images/media-report/logo_city wise.png">
          </div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img
              src="<?php bloginfo('template_url'); ?>/images/media-report/logo_children_house.png">
          </div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img
              src="<?php bloginfo('template_url'); ?>/images/media-report/logo_china culiure center.png"></div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
        <div class="col-md-4 col-sm-6 meida-item">
          <div class="media-img"><img src="<?php bloginfo('template_url'); ?>/images/media-report/logo_city wise.png">
          </div>
          <div class="media-words"><h4 class="media-title pink">China Culiure Center</h4>
            <p class="css-wrap">Roundabout is a social enterprise headed by volunteers. We provide a free service
              connecting those who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we
              were the first charity store in mainland China. We now give support to 48 charitable organizations in the
              Beijing area and many more throughout China, Inner Mongolia and Mongolia.</p></div>
        </div>
      </div>
    </div>
  </div>
  <div class="touch">
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-2 col-sm-9 col-xs-12">
          <div class="row touch-top-line">
            <div class="col-sm-8 col-xs-7">Get in Touch</div>
            <div class="col-sm-4 col-xs-5 pink">* Required Fields</div>
          </div>
          <form>
            <div class="row">
              <div class=" col-sm-6 col-xs-12 touch-item">
                <div class="col-md-12">First Name<span class="pink">*</span>
                </div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class=" col-sm-6 col-xs-12 touch-item">
                <div class="col-md-12">Company Last Name<span
                    class="pink">*</span></div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class=" col-sm-6 col-xs-12 touch-item">
                <div class="col-md-12">Email Address<span
                    class="pink">*</span></div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class=" col-sm-6 col-xs-12 touch-item">
                <div class="col-md-12">Telephone Number<span
                    class="pink">*</span></div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class=" col-sm-12 col-xs-12 touch-item">
                <div class="col-md-12">Enquiry<span class="pink">*</span>
                </div>
                <div class="col-md-12"><input type="text"></div>
              </div>
              <div class="col-xs-12 touch-item">
                <div class="col-xs-12">Description<span
                    class="pink">*</span></div>
                <div class="col-xs-10"><textarea rows="4" maxlength="200" required=""
                                                 class="col-xs-12 touch-textarea"></textarea></div>
              </div>
              <div class="col-md-2 col-xs-4">
                <button class="btn btn-default btn-md touch-button">取消</button>
              </div>
              <div class="col-md-2 xol-xs-4">
                <button class="btn btn-default btn-md touch-button button-click">提交</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
