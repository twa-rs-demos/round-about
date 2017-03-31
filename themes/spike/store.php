<?php get_header(); ?>
  <div id="round-store">
    <div class="row buy">
      <div class="col-sm-offset-2 col-sm-8 col-xs-12 buy-image no-padding"><img
          src="<?php bloginfo('template_url'); ?>/images/store/buy2.png" alt=""/></div>
    </div>
    <div class="row">
      <div class="col-sm-offset-2 col-xs-offset-1 col-sm-8 col-xs-10 no-padding">
        <div class="store-taobao">
          <h2 class="store-taobao-title text-center round-store-title">众爱商店是淘宝的好地方</h2>
          <p class="content taobao-statement">Roundabout is a social enterprise headed by volunteers.We provide a free
            service connecting those who wish togive, be that monetaryor otherwise, to those in need. Started in 2008,
            we were the first charity store inmainland China. We now give support to 48 charitable organizations in the
            Beijing area and many more throughoutChina, Inner Mongolia and Mongolia.</p>

        </div>
      </div>
    </div>
    <div id="onlinestore" class="row shopping-for-children">
      <div class="col-sm-offset-3 col-xs-offset-1 col-sm-6 col-xs-10 no-padding">
        <div>
          <h2 class="shopping-title text-center round-store-title">通过购物来改变孩子的命运</h2>
          <p class="text-center shopping-statement">所得利润用于支持和帮助困境群体。</p>

          <div class="col-xs-6 two-dimension-code no-padding">
            <div class="col-xs-6 inline text-right no-padding relative-positon"><img class="store-picture"
                                                                                     src="<?php bloginfo('template_url'); ?>/images/wechat01.png"
                                                                                     alt=""/><span class="store-name">微信商城</span>
            </div>
            <div class="col-xs-6 inline text-right no-padding relative-positon"><img class="store-picture"
                                                                                     src="<?php bloginfo('template_url'); ?>/images/taobao01.png"
                                                                                     alt=""/><span class="store-name">淘宝商城</span>
            </div>
          </div>
          <div class="col-xs-6 donate-button">
            <div class="col-xs-11 text-right">
              <button id="store-donate-money" class="donate-type" data-toggle="modal" data-target="#moneytary-donation">
                捐款
              </button>
              <div id="moneytary-donation" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content moneytary-donation">
                    <div class="modal-header">
                      <button class="close" type="button" data-dismiss="modal">
                        ×
                      </button>
                      <h4 id="myModalLabel" class="modal-title moneytary-title">Monetary Donation</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-xs-offset-1 col-xs-10 no-padding">
                          <div class="col-xs-6 donate-way no-padding">
                            <div class="text-center"><img class="donate-img"
                                                          src="<?php bloginfo(template_url); ?>/images/wechat01.png"/>
                              <div class="span">Wechat</div>
                            </div>
                          </div>
                          <div class="col-xs-6 donate-way no-padding">
                            <div class="text-center"><a
                                href="http://www.ccafc.org.cn/templates/Donation/txxx.aspx?nodeid=5&amp;projectid=3299&amp;strname=&amp;jiner=&amp;notes_email="
                                target="_blank">
                                <img class="donate-img border"
                                     src="<?php bloginfo(template_url); ?>/images/donate/logo_ccafc.png"/>
                              </a>
                              <div class="span">CCAFC</div>
                            </div>
                          </div>
                          <div class="col-xs-6 donate-way no-padding">
                            <div class="text-center"><a
                                href="http://love.alipay.com/donate/itemDetail.htm?name=2015081315541167376"
                                target="_blank">
                                <img class="donate-img"
                                     src="<?php bloginfo(template_url); ?>/images/donate/logo_alipay.png"/>
                              </a>
                              <div class="span">Alipay</div>
                            </div>
                          </div>
                          <div class="col-xs-6 donate-way no-padding">
                            <div class="text-center"><img class="donate-img border"
                                                          src="<?php bloginfo(template_url); ?>/images/donate/logo_paypal.png"/>
                              <div class="span">Paypal</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button id="store-donate-things" class="donate-type" data-toggle="modal"
                      data-target="#request-pick-up-for-donations-form">捐物
              </button>

              <p class="store-donate-info">... Or if you’re in the giving mood</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade caldera-forms" id="request-pick-up-for-donations-form" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog form-modal round-about-form">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              <span class="form-title">REQUEST FOR PICK UP OF DONATIONS</span>
              <span class="form-statement">* Required Fields</span>
            </h4>
          </div>
          <div class="modal-body">
            <?php $form = get_post(1277);
            echo do_shortcode($form->post_content);
            ?>
          </div>
        </div>
        <div class="hide form-success-info">success</div>
      </div>
    </div>
    <div id="physicalstore" class="row physical-store">
      <div class="col-sm-offset-2 col-xs-offset-1 col-sm-8 col-xs-10 no-padding">
        <div>
          <h2 class="physical-store-title text-center round-store-title">实体商店</h2>
          <div class="col-sm-offset-1 col-sm-10 store-info">We have a retail store &amp; warehouse for sorting &amp;storing
            stock (totalling 2000m2) which is open daily from 9:30am-5:30pm(except Sunday).
          </div>
          <div>
            <div class="col-sm-7 round-about-place"><img
                src="<?php bloginfo('template_url'); ?>/images/store/donate2.png" alt=""/></div>
            <div class="col-sm-5 round-about no-padding">
              <div class="round-about-store">
                <p class="title no-margin">Roundabout</p>
                <p class="no-margin">Yuyang Road West, Adjacent to Yosemite Villas, Houshayu Town, Shunyi
                  District,Beijing. 101302</p>
                <p class="no-margin">Use Baidu or Gaode Map with keyword #roundabout# will direct you to the Store.</p>

              </div>
              <div class="store-position"><img src="<?php bloginfo('template_url'); ?>/images/store/position.png"
                                               alt=""/></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
$css_file = '/css/store.css';
printf('<link rel="stylesheet" href="%s%s">', get_template_directory_uri(), $css_file);
?>
  <script src="<?php bloginfo('template_url'); ?>/js/store.js"></script>
<?php get_footer(); ?>