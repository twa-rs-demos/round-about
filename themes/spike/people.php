<?php get_header(); ?>


<div id="people" class="container-fluid no-padding">
    <div class="picture-max"
         style="background-repeat: no-repeat; background-size: cover; background-image: url(<?php bloginfo('template_url'); ?>/images/people/people.jpg); background-position: center center;"></div>
    <div id="people-volunteer" class="col-xs-offset-3 col-xs-6"><h2 class="middle-title people-h2-title">以人为本，众人为爱</h2>
        <p class="middle-describe people-p">加入众爱，一起公益。</p>

        <button type="button" class="button-style become-volunteer center-block">
            加入志愿者行列
        </button>


        <div class="hidden volunteer-form">
            <div data-reactroot="" role="dialog">
                <div class="modal-backdrop fade in"></div>
                <div role="dialog" tabindex="-1" class="fade in modal" style="display: block; padding-left: 15px;">
                    <div class="modal-dialog">
                        <div class="modal-content" role="document">
                            <div class="modal-header">
                                <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <div id="modal-volunteer-content">
                                        <div class="row">
                                            <div class="col-md-11 col-xs-11 ">
                                                <div class="modal-title-info"><span>VOLUNTEERS APPLICATION FORM</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 col-xs-4  info-right info-margin"><span><!-- react-text: 19 --> FistName
                                                            <!-- /react-text --><span class="pink">*</span></span></div>
                                                    <div class="col-md-3 col-xs-8 info-margin"><input type="text"
                                                                                                      class="input-info"
                                                                                                      required=""></div>
                                                    <div class="col-md-3 col-xs-4 info-right info-margin"><span><!-- react-text: 25 --> LastName
                                                            <!-- /react-text --><span class="pink">*</span></span></div>
                                                    <div class="col-md-3 col-xs-8 info-margin"><input type="text"
                                                                                                      class="input-info"
                                                                                                      required=""></div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-3 col-xs-4 info-right info-margin"><span><!-- react-text: 32 --> Age
                                                            <!-- /react-text --><span class="pink">*</span></span></div>
                                                    <div class="col-md-3 col-xs-8 info-margin"><input type="text"
                                                                                                      class="input-info"
                                                                                                      required=""></div>
                                                    <div class="col-md-3  col-xs-4 info-right info-margin"><span><!-- react-text: 38 -->Telephone Number
                                                            <!-- /react-text --><span class="pink">*</span></span></div>
                                                    <div class="col-md-3 col-xs-8 info-margin"><input type="text"
                                                                                                      class="input-info"
                                                                                                      required=""></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3  col-xs-4 info-right info-margin"><span><!-- react-text: 45 -->Email Address
                                                            <!-- /react-text --><span class="pink">*</span></span></div>
                                                    <div class="col-md-9 col-xs-8 info-margin"><input type="text"
                                                                                                      class="text-length input-info"
                                                                                                      required=""></div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-3 col-xs-4 info-right "><span><!-- react-text: 52 -->Commits
                                                            <!-- /react-text --><span class="pink">*</span></span></div>
                                                    <div class="col-md-9 col-xs-8 info-margin"><textarea rows="10"
                                                                                                         class="textArea-volunteerForm col-md-7 col-xs-8"
                                                                                                         placeholder="5000 Characters Max"
                                                                                                         maxlength="5000"
                                                                                                         required=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-3 col-xs-offset-4 col-xs-3">
                                                        <button type="button"
                                                                class="btn-Cancel btn btn-default btn-sm btn btn-default">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                    <div class="col-md-offset-1 col-md-3 col-xs-offset-1 col-xs-3">
                                                        <button type="button"
                                                                class="btn-Submit btn btn-default btn-sm btn btn-default">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        　
    </div>
    <div id="ourLeaderShip" class="col-md-offset-3 col-md-6 col-xs-offset-3 col-xs-6"><h3 class="middle-title title-h3">
            我们的领导</h3>
        <div class="row">
            <div class="col-md-3 col-xs-12 leader">
                <img class="center-block"
                     src='<?php bloginfo('template_url'); ?>/images/people/volunteerPicture.png'>
                <div class="leader-picture">
                    <p>Jake Tomas,Chief</p>
                    <p>a pick up of you donations,we will try our best to help.</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 leader">
                <img class="center-block"  src='<?php bloginfo('template_url'); ?>/images/people/volunteerPicture.png'>
                <div class="leader-picture">
                    <p>Jake Tomas,Chief</p>
                    <p>a pick up of you donations, we will try our best to help.</p></div>
            </div>
        </div>
    </div>
    <div id="ourCommityLeaders" class="col-md-offset-3 col-md-6 col-xs-offset-3 col-xs-6"><h3
                class="middle-title title-h3">我们的志愿者领队</h3>
        <div class="row">
            <div class="col-md-4 col-xs-12 commity-leader"><img class="center-block"
                                                                src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
            </div>
            <div class="col-md-4 col-xs-12 commity-leader"><img class="center-block"
                                                                src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
            </div>
            <div class="col-md-4 col-xs-12 commity-leader"><img class="center-block"
                                                                src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
            </div>
        </div>
    </div>
    <div id="ourTeam" class="container">
        <div class="col-md-offset-1 col-md-10 col-xs-offset-3 col-xs-6"><h3 class="middle-title ourTime-h3">我们的团队</h3>
        </div>
        <div class="col-md-offset-1 col-md-9  col-xs-offset-2  col-xs-9">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                                   src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                    </div>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"
                                                               src='<?php bloginfo('template_url'); ?>/images/people/leaderPicture.png'>
                </div>
                <div class="col-md-2 col-xs-5 teamMember"><img class="center-block"></div>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-10 col-xs-offset-3 col-xs-6">
            <button class="button-style become-volunteer  center-block welcome-family">加入众爱大家庭</button>


            <div class="hidden volunteer-form">
                <div data-reactroot="" role="dialog">
                    <div class="modal-backdrop fade in"></div>
                    <div role="dialog" tabindex="-1" class="fade in modal" style="display: block; padding-left: 15px;">
                        <div class="modal-dialog">
                            <div class="modal-content" role="document">
                                <div class="modal-header">
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="">
                                        <div id="modal-volunteer-content">
                                            <div class="row">
                                                <div class="col-md-12 col-xs-11 ">
                                                    <div class="modal-title-info">
                                                        <span>VOLUNTEERS APPLICATION FORM</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-4  info-right info-margin"><span><!-- react-text: 19 --> FistName
                                                                <!-- /react-text --><span class="pink">*</span></span>
                                                        </div>
                                                        <div class="col-md-7 col-xs-8 info-margin"><input type="text"
                                                                                                          class="input-info"
                                                                                                          required="">
                                                        </div>
                                                        <div class="col-md-3 col-xs-4 info-right info-margin"><span><!-- react-text: 25 --> LastName
                                                                <!-- /react-text --><span class="pink">*</span></span>
                                                        </div>
                                                        <div class="col-md-7 col-xs-8 info-margin"><input type="text"
                                                                                                          class="input-info"
                                                                                                          required="">
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-md-3 col-xs-4 info-right info-margin"><span><!-- react-text: 32 --> Age
                                                                <!-- /react-text --><span class="pink">*</span></span>
                                                        </div>
                                                        <div class="col-md-7 col-xs-8 info-margin"><input type="text"
                                                                                                          class="input-info"
                                                                                                          required="">
                                                        </div>
                                                        <div class="col-md-3  col-xs-4 info-right info-margin"><span><!-- react-text: 38 -->Telephone Number
                                                                <!-- /react-text --><span class="pink">*</span></span>
                                                        </div>
                                                        <div class="col-md-7 col-xs-8 info-margin"><input type="text"
                                                                                                          class="input-info"
                                                                                                          required="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3  col-xs-4 info-right info-margin"><span><!-- react-text: 45 -->Email Address
                                                                <!-- /react-text --><span class="pink">*</span></span>
                                                        </div>
                                                        <div class="col-md-9 col-xs-8 info-margin"><input type="text"
                                                                                                          class="text-length input-info"
                                                                                                          required="">
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-md-3 col-xs-4 info-right "><span><!-- react-text: 52 -->Commits
                                                                <!-- /react-text --><span class="pink">*</span></span>
                                                        </div>
                                                        <div class="col-md-9 col-xs-8 info-margin"><textarea rows="10"
                                                                                                             class="textArea-volunteerForm col-md-7 col-xs-8"
                                                                                                             placeholder="5000 Characters Max"
                                                                                                             maxlength="5000"
                                                                                                             required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-3 col-xs-offset-4 col-xs-3">
                                                            <button type="button"
                                                                    class="btn-Cancel btn btn-default btn-sm btn btn-default">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                        <div class="col-md-offset-1 col-md-3 col-xs-offset-1 col-xs-3">
                                                            <button type="button"
                                                                    class="btn-Submit btn btn-default btn-sm btn btn-default">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php get_footer(); ?>
