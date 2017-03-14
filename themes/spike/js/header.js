
$(function () {
    let menus = __injectedVars.menus.map((menu) => {
        console.log(menu);

        let subMenus = __injectedVars.subMenus.filter((subMenu) => {
            return subMenu.parent === menu.cat_ID;
        });
        return Object.assign({}, menu, {
            subMenus
        })
    });

    $("#menuTemplate").tmpl(menus)
        .appendTo("#menu");

    $('.menu-list').hover(function () {
        $(this).find('.dropdown').css('display','block');
    },function () {
        $(this).find('.dropdown').css('display','none');
    })
});