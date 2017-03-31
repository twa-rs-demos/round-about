<script type="text/javascript">
    $(document).ready(function () {
        $('.leader-picture').hover(function () {
            console.log('ni');
            $(this).css({
                "background-color": " #ec4c9a",
                "cursor": " pointer",
                "display": " block",
                "opacity": " 0.5"
            });
        }, function () {
            $(this).css({"opacity": "0"});
            $(this).next().css({"opacity": "0"});
        });
    });
</script>

<div id="people" class="container-fluid no-padding">
  <div class="picture-max"
       style="background-repeat: no-repeat; background-size: cover; background-image: url(<?php bloginfo('template_url'); ?>/images/people/people.jpg); background-position: center center;"></div>
  <div class="row" id="people-volunteer">
    <div class="col-xs-offset-3 col-xs-6"><h2 class="middle-title people-h2-title">以人为本，众人为爱</h2>
      <p class="middle-describe people-p">加入众爱，一起公益。</p>

      <button type="button" class="button-style become-volunteer center-block" data-toggle="modal"
              data-target="#volunteers-application-form1">
        加入志愿者行列
      </button>
      　
    </div>
    <div class="modal fade caldera-forms" id="volunteers-application-form1" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog form-modal round-about-form">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              VOLUNTEERS APPLICATION FORM
            </h4>
          </div>
          <div class="modal-body">
            <?php $form = get_post(1234);
            echo do_shortcode($form->post_content);
            ?>
          </div>
        </div>
        <div class="hide form-success-info">success</div>
      </div>
    </div>
  </div>

  <div id="ourLeaderShip">
    <h3 class="middle-title title-h3">我们的领导</h3>
    <div class="row">
      <div class="col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8">
        <div class="row">
          <div class="col-sm-6 col-xs-6 leader">
            <img class="center-block"
                 src='<?php bloginfo('template_url'); ?>/images/people/volunteerPicture.png'>
            <div class="leader-picture">
              <p>Jake Tomas,Chief</p>
              <p>a pick up of you donations, we will try our best to help.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xs-6 leader"><img class="center-block"
                                                     src='<?php bloginfo('template_url'); ?>/images/people/volunteerPicture.png'>
            <div class="leader-picture"><p>Jake Tomas,Chief</p>
              <p>a pick up of you donations, we will try our best to help.</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="ourCommityLeaders">
    <h3 class="middle-title title-h3">我们的志愿者领队</h3>
    <div class="row">
      <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12 commity-leader"><img class="center-block"
                                                                        src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 commity-leader"><img class="center-block"
                                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 commity-leader"><img class="center-block"
                                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="ourTeam">
    <h3 class="middle-title ourTime-h3">我们的团队</h3>
    <div class="row">
      <div class="col-sm-offset-1 col-sm-8 col-xs-12 col-md-offset-1 col-md-9 ">

        <div class="col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                                                                src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>

        <div class="col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                                                                src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"
                                                       src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
        </div>
        <div class="col-sm-2 col-xs-6 teamMember"><img class="center-block"></div>
      </div>
    </div>
    <div>
      <button class="button-style become-volunteer center-block welcome-family"
              data-toggle="modal" data-target="#volunteers-application-form2">加入众爱大家庭
      </button>
    </div>

    <div class="modal fade caldera-forms" id="volunteers-application-form2" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog form-modal round-about-form">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              VOLUNTEERS APPLICATION FORM
            </h4>
          </div>
          <div class="modal-body">
            <?php $form = get_post(1234);
            echo do_shortcode($form->post_content);
            ?>
          </div>
        </div>
        <div class="hide form-success-info">success</div>
      </div>
    </div>
  </div>
</div>