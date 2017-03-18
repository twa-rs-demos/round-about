<?php get_header() ?>
<script type="text/javascript">
    $(function () {
        var length,
            currentIndex = 0,
            length = $('.slider-panel').length;
        console.log(length);
        //将除了第一张图片隐藏
        $('.slider-panel:not(:first)').hide();

        $('.slider-pre').unbind('click');
        $('.slider-pre').bind('click', function () {
            pre();
        });
        $('.slider-next').unbind('click');
        $('.slider-next').bind('click', function () {
            next();
        });
        /**
         * 向前翻页
         */
        function pre() {
            var preIndex = currentIndex;
            currentIndex = (--currentIndex + length) % length;
            console.log(preIndex);
            console.log(currentIndex);
            play(preIndex, currentIndex);
            $('.current-pic-index').html(currentIndex+1);
        }

        /**
         * 向后翻页
         */
        function next() {
            var preIndex = currentIndex;
            currentIndex = ++currentIndex % length;
            console.log(preIndex);
            console.log(currentIndex);
            play(preIndex, currentIndex);
            $('.current-pic-index').html(currentIndex+1);
        }

        function play(preIndex, currentIndex) {
            $('.slider-panel').eq(preIndex).fadeOut(500)
                .parent().children().eq(currentIndex).fadeIn(1000);

        }
    });

</script>
<div id="gallery">
    <div id="gallery-picture">
        <div class="container"><h1 class="title">ASTOUNDING BOOK FAIR SUCCESS AT THE BRITISH SCHOOL</h1>
            <div class="text-right carousel-arrowsmall col-xs-offset-1 col-xs-10">
                <img class="slider-pre" src="<?php bloginfo('template_url'); ?>/images/gallery/carousel_arrowsmall_left.png">
                <span class="current-pic-index">1</span>/<span class="total-pic-num">4</span>
                <img class="slider-next" src="<?php bloginfo('template_url'); ?>/images/gallery/carousel_arrowsmall_right.png">
            </div>
        </div>
        <div class="picture-background row">
            <div class="container">
                <div class="col-xs-offset-1 col-xs-10 picture-carousel">
                    <ul>
                        <li class=" slider-panel"><img class="img col-xs-12 no-padding" src="<?php bloginfo('template_url'); ?>/images/gallery/gallery_1.jpg"></li>
                        <li class=" slider-panel"><img class="img col-xs-12 no-padding" src="<?php bloginfo('template_url'); ?>/images/gallery/gallery_2.png"></li>
                        <li class=" slider-panel"><img class="img col-xs-12 no-padding" src="<?php bloginfo('template_url'); ?>/images/gallery/gallery_3.png"></li>
                        <li class=" slider-panel"><img class="img col-xs-12 no-padding" src="<?php bloginfo('template_url'); ?>/images/gallery/gallery_4.jpg"></li>
                    </ul>
                    <div class="carousel-arrowbg-position">
                        <img class="carousel-arrowbg-left slider-pre" src="<?php bloginfo('template_url'); ?>/images/gallery/carousel_arrowbg_left.png">
                        <img class="slider-next" src="<?php bloginfo('template_url'); ?>/images/gallery/carousel_arrowbg_right.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="container ">
        <div class="col-xs-offset-1 col-xs-10"><p class="gallery-content">RoundAbout is a social enterprise headed
                by volunteers.We provided a free service connecting those who wish to give,be that monetary or
                otherwise,to those in need.Started in 2008,we were the first charity store in mainland China.We now
                give support to 48 charitable organizations in the Being area and many more throughout China,Inner
                Mongolia and Mongolia.</p></div>
    </div>
</div>
<?php get_footer() ?>




