function show(year) {
    if ($(".select" + year).find('.fist-event').text().trim() != '') {
        document.querySelector('div' + '.select' + year).setAttribute("class", 'select' + year);
    }
}

function hide(year) {
    document.querySelector('div' + '.select' + year).setAttribute("class", 'select' + year + " " + "hidden");
}