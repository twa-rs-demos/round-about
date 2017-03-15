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

    $("#drawerMenuTemplate").tmpl(menus)
        .appendTo("#drawerMenu");

    $('.menu-list').hover(function () {
        $(this).find('.dropdown').css('display', 'block');
    }, function () {
        $(this).find('.dropdown').css('display', 'none');
    });

    $('.fa-bars').click(function () {
        $('.menu-list2 ').toggle(function () {
            if ($('.menu-list2').is(':visible')) {
                $('body').css('overflow', 'hidden');
            } else {
                $('body').css('overflow', 'auto');
            }
        });
    });

    $('.dropdown-icon').click(function () {
        $(this).parent('.nav-brand').next('.sub-menu').toggle();
    })


});