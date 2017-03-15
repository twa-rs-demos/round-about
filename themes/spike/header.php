<?php
$categories = get_categories();
$menus = array_filter($categories, function ($cat, $key) {
  return $cat->parent === 0 && $cat->name !== 'Uncategorized';
}, ARRAY_FILTER_USE_BOTH);

$sub_menus = array();
foreach ($menus as $menu) {
  $menu->link = esc_url(get_permalink(get_page_by_title($menu->slug)));
  $tax_terms = get_terms('category', array('child_of' => $menu->cat_ID, "hide_empty" => false));
  foreach ($tax_terms as $tax_term) {
    $tax_term->link = esc_url(get_permalink(get_page_by_title($tax_term->slug)));
    array_push($sub_menus, $tax_term);
  }
}
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Tutorial theme</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/main.css" type="text/css" media="screen"/>
  <?php //bloginfo('template_url'); ?><!--/libs/bootstrap.min.css" type="text/css"-->
  <!--        media="screen"/>-->
  <script src="<?php bloginfo('template_url'); ?>/libs/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/libs/jquery.tmpl.min.js"></script>

  <!--  <script src="--><?php //bloginfo('template_url'); ?><!--/libs/bootstrap.min.js"></script>-->

  <!--  <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <!--  <script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>-->
  <!--  <script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <script src="<?php bloginfo('template_url'); ?>/js/header.js"></script>

  <script type="text/javascript">
      var __injectedVars = {
          menus: Object.values(JSON.parse('<?php echo json_encode($menus)?>')),
          subMenus: JSON.parse('<?php echo json_encode($sub_menus)?>')
      };
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
</head>
<body>

<div id="page">
  <div class="container-fluid no-padding page-container">
    <!--    header-->
    <div id="header" class="row">
      <div class="top-info">
        <div>
          <div class="col-md-6 col-sm-4 col-xs-3">
            <div class="row logo"><a href="http://localhost:8080/">
                <img
                  src="<?php bloginfo('template_url'); ?>/images/home/index_logo1.png"
                  alt="logo"></a></div>
          </div>
          <div class="col-md-6 col-sm-8 col-xs-9 text-right no-padding">
            <div class="right-topinfo">
              <a class="top-right-word  no-padding"
                 href="#">
                月报中心
              </a>
              <a href="#" class="top-right-word no-padding">月报申领</a>
              <?php pll_the_languages(); ?>
              <a class="no-padding top-left-icon ">
                <img class="icon"
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


      <div class="nav-menu">
        <div>
          <div class="no-margin menu-list1">
            <div class="col-md-10 col-xs-7">
              <div class="menu" id="menu">
              </div>
            </div>

            <div class="col-md-2 col-xs-5 text-right no-padding header-search-box">
              <div class="search"><input type="text" placeholder="搜索本站">
                <button><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAABGdBTUEAALGPC/xhBQAAAZBJREFUKBWNkr0vQ1EUwO+5r9GEWlq2ilCTpRZmFhL9GDr5A9AYRYL/gZDUVFJmiWiCLhZiMJRFYrXVRLVpRPL0vXucc/NO8xIDJ3nvfP56Pl5BBYK5cv+7gS0Fag4Q0xRuKIBHjXonXlt+ljrRwEYrW0l7yj9TiBOSEA0A3wC4nbgs7kuMNdhOCE8CAahXCtcpl0TEaSnWWi0QfN3z7XhBJ4JOEmMjqaGr1QI9M46jsjRSl4vRwKFArDXvxAZ3ImgNDhZd9lniF8UaaFViGxWOtjPH42yz6OAQZEI9DNksvYyBO7E9x58SWxNAO1lJSjCsqWMvDmg+JcejPrDDh/jIlzOSYP2WrwyiwY0g5jomZmvZj2gHd40PSwT2GV9Vm7lyicfjTuh7DAV7QcePfg2Q32LQfkcqXjdG7XHgD3nRUT2bOF9pWJCLCZ7nk/P1QjBdGDq0yHAoZuEeKAk+OV+PD8E7+RE3ZrzuDeVTUgMK7n+BkgzrZuEoaVxzSzEL09+w/S+Qf4RhdPGUrjJJ0OYPDAGdnSUm6coAAAAASUVORK5CYII="
                    alt="search"></button>
              </div>
            </div>
          </div>


          <div class="row no-margin responsive-menu">
            <div class="col-md-2 col-xs-3">
              <button class="menu-icon">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <div class="col-md-10 col-xs-offset-3 col-xs-9 text-right no-padding header-search-box">
              <div class="search"><input type="text" placeholder="搜索本站">
                <button><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAABGdBTUEAALGPC/xhBQAAAZBJREFUKBWNkr0vQ1EUwO+5r9GEWlq2ilCTpRZmFhL9GDr5A9AYRYL/gZDUVFJmiWiCLhZiMJRFYrXVRLVpRPL0vXucc/NO8xIDJ3nvfP56Pl5BBYK5cv+7gS0Fag4Q0xRuKIBHjXonXlt+ljrRwEYrW0l7yj9TiBOSEA0A3wC4nbgs7kuMNdhOCE8CAahXCtcpl0TEaSnWWi0QfN3z7XhBJ4JOEmMjqaGr1QI9M46jsjRSl4vRwKFArDXvxAZ3ImgNDhZd9lniF8UaaFViGxWOtjPH42yz6OAQZEI9DNksvYyBO7E9x58SWxNAO1lJSjCsqWMvDmg+JcejPrDDh/jIlzOSYP2WrwyiwY0g5jomZmvZj2gHd40PSwT2GV9Vm7lyicfjTuh7DAV7QcePfg2Q32LQfkcqXjdG7XHgD3nRUT2bOF9pWJCLCZ7nk/P1QjBdGDq0yHAoZuEeKAk+OV+PD8E7+RE3ZrzuDeVTUgMK7n+BkgzrZuEoaVxzSzEL09+w/S+Qf4RhdPGUrjJJ0OYPDAGdnSUm6coAAAAASUVORK5CYII="
                    alt="search"></button>
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


