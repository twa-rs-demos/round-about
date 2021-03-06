<?php
$categories = get_categories();
$menus = array_filter($categories, function ($cat, $key) {
  return $cat->parent === 0 && $cat->name !== 'Uncategorized';
}, ARRAY_FILTER_USE_BOTH);

function sort_by_description($a, $b)
{
  return $a->description - $b->description;
}

usort($menus, 'sort_by_description');
$sub_menus = array();
foreach ($menus as $menu) {
  $menu->link = esc_url(get_permalink(get_page_by_title($menu->slug)));
  $tax_terms = get_terms('category', array('child_of' => $menu->cat_ID, "hide_empty" => false));
  foreach ($tax_terms as $tax_term) {
    $tax_term->link = esc_url(get_permalink(get_page_by_title($tax_term->slug)));
    array_push($sub_menus, $tax_term);
  }
}
usort($sub_menus, 'sort_by_description');

$current_page = get_category_by_slug(get_the_title(get_queried_object_id()));
$parent_page_name = get_cat_name($current_page->category_parent);
?>

<!DOCTYPE html>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
<title>Tutorial theme</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/main.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/search.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pagenation.css" type="text/css" media="screen"/>
<script src="<?php bloginfo('template_url'); ?>/libs/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/jquery.tmpl.min.js"></script>
<script src="https://cdn.jsdelivr.net/lodash/4.17.4/lodash.min.js"></script>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


<script type="text/javascript">
    var __injectedVars = {
        //            menus: Object.values(JSON.parse('<?php //echo json_encode($menus)?>//')),
        menus: JSON.parse('<?php echo json_encode($menus)?>'),
        subMenus: JSON.parse('<?php echo json_encode($sub_menus)?>'),
        currentLanguage: '<?php  echo get_bloginfo('language')?>',
        currentPage: JSON.parse('<?php echo json_encode($current_page);?>'),
        parentPageName: JSON.parse('<?php echo json_encode($parent_page_name);?>')
    };
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".wechat").click(function () {
            $('.wechat-box').attr("class", "wechat-box modal");
        });
        $(".close").click(function () {
            $('.wechat-box').attr("class", "hide wechat-box modal");
        });
    });
</script>

<script type="text/x-jquery-tmpl" id="menuTemplate">
  <div class="menu-list">
  <div class="first-menu">
  <a href="${link}">
  ${name}
  <span class="triangle"/>
  </a>
  </div>
  <div class="dropdown">
  <div class='triangle-tip-up'></div>
  <div class='dropdown-list'>
  <ul class='dropdown-items'>
  {{each subMenus}}
  <li class='dropdown-item'><a href="${$value.link}">${$value.name}</a></li>
  {{/each}}
  </ul>
  </div>
  </div>
  </div>







</script>

<script type="text/x-jquery-tmpl" id="drawerMenuTemplate">
  <li class="menu-item">
  <div class='nav-brand'>
  <a class="menu-link" href="${link}">${name}</a>
  <i class="dropdown-icon fa fa-chevron-down"></i>
  </div>
  <ul class='sub-menu'>
  {{each subMenus}}
  <li class='sub-item'><a href="${$value.link}" class='menu-link'>${$value.name}</a></li>
  {{/each}}
  </ul>
  </li>








</script>

<script src="<?php bloginfo('template_url'); ?>/js/header.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/events.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/calendar.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/pagination.js"></script>

</head>
<body>

<div id="page">
  <div class="container-fluid no-padding page-container">
    <!--    header-->
    <div id="header">
      <div class="top-info row">
        <div>
          <div class="col-md-6 col-sm-4 col-xs-3">
            <div class="row logo"><a href="<?php echo esc_url(home_url('/')); ?>">
                <img
                  src="<?php bloginfo('template_url'); ?>/images/home/index_logo1.png"
                  alt="logo"></a></div>
          </div>
          <div class="col-md-6 col-sm-8 col-xs-9 text-right no-padding">
            <div class="right-topinfo">
              <a class="top-right-word  no-padding"
                 href="<?php echo esc_url(get_permalink(get_page_by_title('newsletter_center_zh'))) ?>">
                月报中心
              </a>
              <a href="<?php echo esc_url(home_url('/')); ?>#apply-monthly-report"
                 class="top-right-word no-padding">月报申领</a>
              <?php pll_the_languages(); ?>
              <a class="no-padding top-left-icon ">
                <img class="icon wechat"
                     src="<?php bloginfo('template_url'); ?>/images/icon_wechat.png" alt="wechat"></a>
              <a href="http://weibo.com/Rooundabout666?sudaref=www.so.com&amp;is_all=1"
                 class="no-padding top-left-icon" target="_blank">
                <img class="icon"
                     src="<?php bloginfo('template_url'); ?>/images/icon_weibo.png" alt="weibo"></a>
              <a href="https://shop125100050.taobao.com/index.htm?spm=2013.1.w5002-12973215066.2.AXTtj4"
                 class="no-padding  top-left-icon " target="_blank">
                <img class="icon"
                     src="<?php bloginfo('template_url'); ?>/images/icon_taobao.png"
                     alt="taobao">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="static-modal" id="wechatModal">
        <div tabindex="-1" role="dialog" class="modal hide wechat-box">
          <div class="modal-dialog">
            <div class="modal-content" role="document">
              <div class="modal-body">
                <div class="col-xs-offset-11 col-xs-1">
                  <span class="close">X</span>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/images/wechat01.png">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-menu">
        <div>
          <div class="no-margin menu-list1 row">
            <div class="col-md-10 col-xs-7">
              <div class="menu" id="menu">
              </div>
            </div>

            <div class="col-md-2 col-xs-5 text-right no-padding header-search-box">

              <div class="search">
                <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <input type="text" placeholder="搜索本站" name="s" id="s">
                  <button><img id="searchsubmit" class="submit"
                               src="<?php bloginfo('template_url'); ?>/images/home/icon_search_small_focused.png"
                               alt="search">
                  </button>
                </form>
              </div>
            </div>
          </div>


          <div class="row no-margin responsive-menu">
            <div class="col-md-2 col-xs-3">
              <button class="menu-icon icon-menulist2">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <div class="col-md-10  col-xs-9 text-right no-padding header-search-box">

              <div class="search">
                <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <input type="text" placeholder="搜索本站" name="s" id="s">
                  <button><img id="searchsubmit" class="submit"
                               src="<?php bloginfo('template_url'); ?>/images/home/icon_search_small_focused.png"
                               alt="search">
                  </button>
                </form>
              </div>

            </div>
          </div>
          <div class="menu-list2">
            <div class="sidebar-wrapper"></div>
            <div class="nav-bar">
              <div>
                <ul class="nav-item" id="drawerMenu">
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>












