var jumpInSamePages = [{
    page: 'retailstore_zh',
    jumppositopn: '#physicalstore'
}, {
    page: 'onlinestore_zh',
    jumppositopn: '#onlinestore'
}, {
    page: 'retailstore_en',
    jumppositopn: '#physicalstore'
}, {
    page: 'onlinestore_zh',
    jumppositopn: '#onlinestore'
}, {
    page: 'moneytary_donation_zh',
    jumppositopn: '#donatemoney'
}, {
    page: 'itemd_onation-zh',
    jumppositopn: '#item-donation'
}, {
    page: 'moneytary_donation_en',
    jumppositopn: '#donatemoney'
}, {
    page: 'itemd_onation-en',
    jumppositopn: '#item-donation'
}];

$(function () {
    let menus = __injectedVars.menus.map((menu) => {

        let subMenus = __injectedVars.subMenus.filter((subMenu) => {
            return subMenu.parent === menu.cat_ID;
        });
        return Object.assign({}, menu, {
            subMenus
        })
    });

    function getjumpage(jumpInSamePage, submenus, parentLink) {
        submenus.forEach((submenu) => {
            if (submenu.slug === jumpInSamePage.page) {
                submenu.link = `${parentLink}${jumpInSamePage.jumppositopn}`
            }
        })
    }

    jumpInSamePages.forEach((jumpInSamePage) => {
        menus.forEach((menu) => {
            getjumpage(jumpInSamePage, menu.subMenus, menu.link);
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
