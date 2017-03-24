<script src="<?php bloginfo('template_url'); ?>/js/advance-search.js"></script>

<div class="row" id="class-fields">
  <div class="col-sm-offset-2 col-sm-8 no-padding">
    <div>
      <div class="public-resource row"><h2 class="middle-title">共享资源</h2>
        <p>Roundabout is a social enterprise headed by volunteers. We provide a free service connecting those
          who wish to give, be that monetary or otherwise, to those in need. Started in 2008, we </p></div>
    </div>
    <div class="search-box row">
      <div class="col-sm-offset-4 col-xs-offset-3 col-sm-4 col-xs-6 no-padding search-box-container">

        <?php $search = new WP_Advanced_Search('myclassifieldsform');
        $search->the_form();
        ?>
        <img src='<?php bloginfo('template_url'); ?>/images/home/icon_search_small_focused.png' alt=''
             class="submit-search-icon"/>


      </div>
      <div class="col-sm-offset-4 col-xs-offset-3 col-sm-4 col-xs-6 no-padding search-type">
        <button class="advanced-search">高级搜索 &gt;</button>
      </div>


      <div class="static-modal hidden" id="filter">
        <div tabindex="-1" role="dialog" class="modal" style="display: block;">
          <div class="modal-dialog">
            <div class="modal-content" role="document">
              <div class="modal-header">
                <div>
                  <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title">筛选</h4></div>
              </div>
              <div class="modal-body">
                <div class="location"><p>地点</p>
                  <div>
                    <button class="filter-button ">北京</button>
                    <button class="filter-button ">上海</button>
                    <button class="filter-button ">河北</button>
                    <button class="filter-button ">河南</button>
                    <button class="filter-button ">杭州</button>
                    <button class="filter-button ">成都</button>
                    <button class="filter-button ">甘肃</button>
                    <button class="filter-button ">青海</button>
                    <button class="filter-button ">广西</button>
                  </div>
                </div>
                <div class="organization"><p>机构</p>
                  <div>
                    <button class="filter-button ">非营利</button>
                    <button class="filter-button ">社会企业</button>
                    <button class="filter-button ">营利</button>
                  </div>
                </div>
                <div class="benefit"><p>受益</p>
                  <div>
                    <button class="filter-button ">孩子</button>
                    <button class="filter-button ">老年人</button>
                    <button class="filter-button ">白血病</button>
                    <button class="filter-button ">癌症</button>
                    <button class="filter-button ">灾难</button>
                    <button class="filter-button ">HTV/AIDS</button>
                    <button class="filter-button ">普通的</button>
                    <button class="filter-button ">教育</button>
                    <button class="filter-button ">流浪汉</button>
                    <button class="filter-button ">其他</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="provide-and-question row">
      <div class="col-sm-6 col-xs-12 provide">
        <div class="title">提供</div>
        <div class="provided-types">
          <div class="col-xs-6 provided-name">
            <button>Items</button>
          </div>
          <div class="col-xs-6 provided-name">
            <button>Skills &amp; Expertise</button>
          </div>
          <div class="col-xs-6 provided-name">
            <button>Time</button>
          </div>
          <div class="col-xs-6 provided-name">
            <button>Other</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xs-12 question">
        <div class="title">提问</div>
        <div class="provided-types">
          <div class="col-xs-6 provided-name">
            <button>Items</button>
          </div>
          <div class="col-xs-6 provided-name">
            <button>Skills &amp; Expertise</button>
          </div>
          <div class="col-xs-6 provided-name">
            <button>Time</button>
          </div>
          <div class="col-xs-6 provided-name">
            <button>Other</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="search-results large-9 columns">
  <?php $wp_query = $search->query(); ?>

  <?php
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'posts_per_page' => 4,
    'category_name' => 'classifieds_zh',
    'paged' => $paged
  );
  $posts_query = new WP_Query($args);

  ?>

  <?php
  if ($wp_query->have_posts()) :

    while ($wp_query->have_posts()) :$wp_query->the_post(); ?>

      <article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
        <?php $image = get_field('img', get_the_ID()); ?>
        <div class='row post-item'>
          <?php if ($image) {
            echo "<img src=" . $image['url'] . " alt='img' class='col-xs-3'/>";
          } ?>
          <div class="entry-content  col-xs-9">
            <?php

            if (is_single()) :
              the_title('<h3 class="entry-title">', '</h3>');
            else :
              the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
            endif;

            the_content(sprintf(
              __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen'),
              the_title('<span class="screen-reader-text">', '</span>', false)
            ));
            ?>
          </div>
        </div>
      </article>
      <?php
    endwhile;

  else :
    echo '<p>Sorry, no results matched your search.</p>';
  endif;
  ?>
  <div class='my-pagination'>
    <?php page_pagination($posts_query); ?>
  </div>

  <?php wp_reset_query(); ?>
</div>