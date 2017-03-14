
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