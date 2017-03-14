<?php
$categories = get_categories();
$menus = array_filter($categories, function ($cat, $key) {
  return $cat->parent === 0 && $cat->name !== 'Uncategorized';
}, ARRAY_FILTER_USE_BOTH);

$sub_menus = array();
foreach ($menus as $menu) {

  $tax_terms = get_terms('category', array('child_of' => $menu->cat_ID, "hide_empty" => false));
  foreach ($tax_terms as $tax_term) {

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
  <!--  <link rel="stylesheet" href="-->
  <?php //bloginfo('template_url'); ?><!--/libs/bootstrap.min.css" type="text/css"-->
  <!--        media="screen"/>-->
  <script src="<?php bloginfo('template_url'); ?>/libs/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/libs/jquery.tmpl.min.js"></script>
  <!--  <script src="--><?php //bloginfo('template_url'); ?><!--/libs/bootstrap.min.js"></script>-->

  <!--  <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <!--  <script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>-->
  <!--  <script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <!--  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->

  <script type="text/javascript">

      var __injectedVars = {
          menus: Object.values(JSON.parse('<?php echo json_encode($menus)?>')),
          subMenus: JSON.parse('<?php echo json_encode($sub_menus)?>')
      };
  </script>
  <script type="text/x-jquery-tmpl" id="menuTemplate">
    <div class="menu-list">
      <div class="first-menu">
        <a>
          ${name}
          <span class="triangle"/>
        </a>
      </div>
      <div class="dropdown">
        <div class='triangle-tip-up'></div>
        <div class='dropdown-list'>
          <ul class='dropdown-items'>
            {{each subMenus}}
              <li>${$value.name}</li>
            {{/each}}
          </ul>
        </div>
      </div>
    </div>

  </script>

  <script>
      $(function () {

          let menus = __injectedVars.menus.map((menu) => {
              let subMenus = __injectedVars.subMenus.filter((subMenu) => {
                  return subMenu.parent === menu.cat_ID;
              });
              return Object.assign({}, menu, {
                  subMenus
              })
          });

          $("#menuTemplate").tmpl(menus)
              .appendTo("#menu");

          $('.first-menu').hover(function () {
              $(this).next('.dropdown').css('display','block');
          },function () {
              $(this).next('.dropdown').css('display','none');
          })
      })
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
            <div class="row logo"><a href="/tw-ra/">
                <img
                  src="data:image/png;base64,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"
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
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAYAAADeiIy1AAAABGdBTUEAALGPC/xhBQAAA09JREFUSA21VH1ojWEUP+d57V4f8zFKwvgDkWIrSvkIZa5tmDJv4W4UsvIX/0iSf8gfRFKSJGxj3W0NcTck5SMUbUb846N8DBki1rjuc/yeu73vfe/1ukN56n2fc37nd57zPM8552FKGyKiquobF5OQ+abDPEyYerPQeyJpZeYLAelzxLbnfklzzaiy11pd3zRP6/hBERrnxX+Rmd/Dca8MsPaXh0Jff7H7AG6gE7XntzDxTpzIxXz4KRD4tzibQuGios8pBh8lsWhlbeN6EX3Ix94jxEy3gxII2XbBp0xk5CM6kkT2uCSmDmXxzKxg1gjk46WLG4H5gNV3wGDgLh/XPK2TY7tTeD6K0nGqEJJs1yb8dWBgaPPykvlt2MBbF4fAJM0rF876iEAPvDh4a06duTg8BUtTuDISbUWgSak4v8OdvknHgcWF6C5CTsaVBbtkalbE7SxWZKU9vyV1naTGKILPKOP+SSizhNPgtuhIUFlV33S8FGU/R1hy4RVg4Tac+roidXiFXXjTuxICRdtx9CFe8Lcy8kekVmOxKfDZiIABP25iMyJVbFmby5YueG04Ck6P/ch+mFLWOha9FS2w+XdBjF93i5SR1i0n6y5MMBgCcY0RehrYZY3oeAkC5CW5/AT4j6RuCpOeIpffDYaAQ+M6fjoajQYV9aOjCNbmJfvKzGeRHNuxYbF75XbRWPR3hYshSLi0aCwpq8zBUFDj2ztkLfhE6KUZKPMr2EOWQ0idUYUs5mnansS5UxHt0kyLsPWpBjdVid8OiAXgmncyMYBfTQQyWmXkfAGotdjBwC6z5898B8SHuIpyD/o34itsqmuU2cWXunfjQMlZpB9a4I8ez6STR8Ij3MujGnGBKU1cYS1O9wzHz8dJcgH0EmI0KqR/GFjxhhsoEmka3En6gxLJC9vF99PXa2i4MuhLrGM3QuWk2zLrHENx73VzlJncZa2qa1yltT72J1yHo1htCC8rPOjmyDFkmsOlhcdJqU1olm+ZeMZmUoCnaIsJktB7cvCz1zREx8RitA8VusjP3o09KreLJzr2v7o6x8mZq+sujhP6MQd9NAp5sIj1c/xu44mfrYW2ZQWs/OVLQi8c/n+Zq89dy6muvzzaWfwnVbowPNKF2QkAAAAASUVORK5CYII="></a>
              <a href="http://weibo.com/Rooundabout666?sudaref=www.so.com&amp;is_all=1"
                 class="no-padding top-left-icon" target="_blank">
                <img class="icon"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAVCAYAAABYHP4bAAAABGdBTUEAALGPC/xhBQAABGlJREFUSA2lVWtsVFUQnrl3X7VC2tLwCNEYHzH80FhfsVSDTR92N8agdC/2pTEk/NDEiBqNif5UCMEXUX+gmLjblnB3gWLj3m2RUCIaY4xICBgDBhRRGmlokbLd7t47fuc2Z9224g84yd6ZMzNnHt/MOct0jas35TSJeFuE+EYmYSI+yUzJkAQTltUyod0bmrlaKiJrhOguIqkBrRaS+zyRrVM8fbrfzqzSfq85UJgqXjHYaA6Ew0vh7E6U9BIz/0lCVUWibNJ2HlPBIL/y6h88UOtO5daLUBRWy2A9GJHoy5bFbvkp2xbTCzo3LamqONvY2Dhl299U5Gm8H9WtRoALYTJv/c+KAIeRSDsb3FzuNPg3AcuD+N1CIi/k2ekqD6L4KXbenS7IyTN/XZ5MpL4YqKgIcZiqOhn9UnBOszw5L1AmkwmjwTvJ895BRpVznSLwirmyYCiwyTTNFiJjHQs3XciNvmFZK3OoJqls0bOGQPmhPXsOVI1NXv4cWTxULi/ngf94MjW0ksS1UOUq2C4t5gtnyTTXP2VFv0ymnAbYN+P3GrNxBHaqPwtKgVQl5y/lBmBwxSAqICraRIQ2ly0VjD33I4gegMUYiwSVGmMf8c1YJkqBxiZpu8rQV1zNR3iROmZwYLsnhf2KRwL1ioI57AdKpp0O8bx5TUYzj8L4qAFKhoxh+mpwrBpV3QM4GqEzfUczn6wiXe2tJ0DUj9igY+TRKGz3cWJoqJImij9DvlwpsTzc7DQwf6vnibYjM6L53+Su7DLxZB3SfR0YhZHURVj1BULmxo7Vj5yZe4Ixxs9jwt73FcxjTMbjPfG2r9R+RzpTVxTpQSV3YAgKyGx/TSV9EIvF8tqRuv0uyTCqCykZbEYNCrZ1Wa0/ahtFDRavXTFwhIeK23UQjPizBU++R5ANUDcDrijGdAt6mQVfuhadVuwgputj5UMtBFzicWHrzO7frwEF3ikYCA33xKMjit8xMHQDnL4HtuQQcPq4I8jDvanso8qutERGSrxihO6dtcfGwINbUEI4+k4rC9NeE6wxonzQYN4M+gsgeVHrgU9diVeMQQtn7YnOzdkDOqKvfaFQrVYCxZsB4x8RijZ1x2OvIonPPKFBrUdWP5V4MEDDh1/LhHm35jVFwrJtZiPxvXsPLfB535FUF8zhhn7bqYcnvAIzC738PewtLAXttTNrVf9KeqLz15uhjXqvKQoiSqQyNpzFAVEmQlXIrn46z5kPgfUzepqUHar8NkzBtfhD+03te9PO07h/27QN9JdM4minFT2k9OXLD2Tbx0J5/vVTZNYF4+Ns8ObliyI7x8cp8ndxqsXAlIlpnOhZ0/aDOty3K9voui6eIrpfO1PnAgZ1d7THDmtZOfUDaUFf2om5njyHnrQC94vEMgKDcxj8UfQlgrerDvRuJLRYn4H+FIb97drr+JPy+6X1ms4KpIWJ3UOLuehauFh1LHQ7MLsNgdVzNYngk8j+FA4OA9rhbit2XJ/7P/oPuvbPv/Lrj0sAAAAASUVORK5CYII="></a>
              <a href="https://shop125100050.taobao.com/index.htm?spm=2013.1.w5002-12973215066.2.AXTtj4"
                 class="no-padding  top-left-icon " target="_blank">
                <img class="icon"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAUCAYAAACTQC2+AAAABGdBTUEAALGPC/xhBQAABLBJREFUSA2VVX1sU1UUv+e+rh1zK6JMiXZionEMTcCIiAREQO3oJIN9NMLaGcMfqIkmSuLiR3TGxD+I/2kC/2iiXae+7iNm2hWcLhNxbswQjQYwOgYMIzjAdWNt1/fu9Xff6+vWaYye5N17vs+955x7HrEcSCl5JJZ4gkjcC9ZQqCHwPoHQ9Z/cGXbmB0ZsBHTCLSgeDFZfduz+6+5yFKMd8deBvyKlxdnb1hFfDqw1TWfrmJSVTLJK0LszGq3Bof6MxnpXSE6rmBRK5sNByqQkScTOEaPTWhHv2bXDf87yhoUcJKLHByWT6xwaykdDjds2tsXixxD7HsWH8gWsQ/D3AJxf6+jaMppkTLqhuyjHF4yoU1tUtrfp0Y1X8oHgcJ+Q8i3HmBM9h+NdkEK0Ozxnh5GJgAM4fZwkP+JdtPTH7dvXzCj5hx3xuw0pDyAz9ykaut/7ykvW5QMpZkRPVDPUCEGGWXHpsEglj8NApXAh9BHTngoHq39ZKFC0rn9xc5plTuOGRYrmnPZwhShAzuuoVHwTbgy8UXlr+ZfmTLLTCYIm6OWMv2hrYiXm85V7xvP0AiQY3HoeNxh12KjpWutGka7EKmmIYxCc5UzudLlYJmuwTuT7LvD62GLXDjZpKHmVMobRd1jHFP5PwDXPPmFmYqi56mAAHbK7zjRfAqWueZsgdtSUWq2H+VdnqLfJ6/Z2TyUn3xQIggCmZDQJB2gO9SmgLJYpC80tJLOlBTSTN1qBfEtLHh+fSJ1CG7cgXWXCND+b1RKbwvWBD6Kdic1CsmeVQ8lZfXNDoCcSi6NvpJUNNEQ/0u2f71jh6OL5rMWWssNp7zi0whQGrmylrL85WLNF1/tLMzRzAHXqp+KybqUrUlOXnEAg+7USb73jQ+27azZMtsV6v51LHfs93wyWQoP/JHNpoZzRHWpPU6oVtwwJId9Fg1xW37wgSmWzw3f2j7v71OPOAw7J85PB4XqMook0ngke7G+Kh3fSj0mEdzMHyNsLcxSNcWK6ou0DkHuWiUsFqUJtC26klDOUVo3BUIGvop8eWQJsC8rhUl+J5t4fagy04ITIrg2o0c+Kh0lxFcwwvunmOv9FR27vMlUQKKonwkjT00pIjH9C6ekKycTzzldovIAiugGcZTjYnpGREeuh5jUkS+YDYSrUCBLv5YQnQg3+r7kmr+aVgaQMUTGftnFZGon1voa0ObVddnL0Ym2hHv1hBUILP4Q0xqCcqxnfr9LDs8sxidkVx0gwYwBt22XXIhdGsvVSilZ02CnoWrVE2p/EzfK3Aj3GMUy3maboQW6tqYucn6koL25TboLBO2eJUwtQvFeYMunFt1PhCuxa0SBO24S3dD/yPQTuAM7YAaGaKhZwyQ5Tmx5/FcYvI5BbcdFtz4SDgXdsFXuN6odXSzK2Qno9dKcRMYlBOYrBO3jTNcbU+YmZaqG5hjV3SVbOJH34P7yNY22y/BGNY7qstLrwo67Pq7LG7EEIVnrYkluCwfWp+YH+DUcDrTWZiZv8HeB8wsXpkV0NgeNWTR6re/gE8v4gJnjV/wliuyb1b2rHDW5HNq7DT9FA8/+Kn8OA11N2sLZ2gzUH/wKCeAnBs+2LXwAAAABJRU5ErkJggg=="
                     alt="">
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
            <div class="col-md-10 col-xs-9 text-right no-padding header-search-box">
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
                <ul class="nav-item">
                  <div>
                    <?php
                    $categories = get_categories();
                    $menus = array_filter($categories, function ($cat, $key) {
                      return $cat->parent === 0 && $cat->name !== 'Uncategorized';
                    }, ARRAY_FILTER_USE_BOTH);

                    foreach ($menus as $menu) {
                      ?>
                      <div>
                        <li class="menu-item">
                          <div class="nav-brand ">
                            <?php echo $menu->name ?>
                            <i class="dropdown-icon fa fa-chevron-down"></i>
                          </div>
                        </li>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


