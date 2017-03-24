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
}, {
    page: 'apply_founding_zh',
    jumppositopn: 'https://jinshuju.net/f/RhPPwa'
}, {
    page: 'apply_founding_en',
    jumppositopn: 'https://jinshuju.net/f/RhPPwa'
}, {
    page: 'donate_link_zh',
    jumppositopn: ''
}, {
    page: 'donate_link_en',
    jumppositopn: ''
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

    function getjumpage(jumpInSamePage, submenus, parentLink, menus) {
        submenus.forEach((submenu) => {
            if (submenu.slug === jumpInSamePage.page) {
                submenu.link = `${parentLink}${jumpInSamePage.jumppositopn}`;

                if (jumpInSamePage.page === 'apply_founding_zh' || jumpInSamePage.page === 'apply_founding_en') {
                    submenu.link = jumpInSamePage.jumppositopn;
                }
                if (jumpInSamePage.page === 'donate_link_zh' || jumpInSamePage.page === 'donate_link_en') {
                    menus.forEach(menu => {
                        if (menu.slug === 'donate_zh' || menu.slug === 'donate_en') {
                            submenu.link = menu.link;
                        }
                    });
                }
            }
        })
    }

    jumpInSamePages.forEach((jumpInSamePage) => {
        menus.forEach((menu) => {
            getjumpage(jumpInSamePage, menu.subMenus, menu.link, menus);
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

    $('.icon-menulist2').click(function () {
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
    });

    $(function () {
        if (__injectedVars.currentLanguage === 'en-US') {
            $('.lang-item-en').css('display', 'none');
            $('.lang-item-zh').css('display', 'inline-block');
            $('.lang-item-zh a').text('中文');
        } else {
            $('.lang-item-en').css('display', 'inline-block');
            $('.lang-item-zh').css('display', 'none');
        }
    });

    $('.first-menu').each((index, ele) => {
        const menu = Object.values($(ele))[0].innerText.trim();
        if (menu === __injectedVars.currentPage.name || menu === __injectedVars.parentPageName) {
            $(ele).addClass('active');
        }
    });

    $('.dropdown-item').each((index, ele) => {
        if (Object.values($(ele))[0].innerText.trim() === __injectedVars.currentPage.name) {
            $(ele).find('a').addClass('selected-sub');
        }
    });

    $('.nav-brand').each((index, ele) => {
        const menu = Object.values($(ele))[0].innerText.trim();
        if (menu === __injectedVars.currentPage.name || menu === __injectedVars.parentPageName) {
            $(ele).addClass('active');
        }
    });

    $('.sub-item').each((index, ele) => {
        if (Object.values($(ele))[0].innerText.trim() === __injectedVars.currentPage.name) {
            $(ele).find('a').addClass('selected-sub-menu');
        }
    });
});
