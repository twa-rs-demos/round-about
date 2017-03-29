$(function () {

    $('.list-items-content').after('<div class="list-items-label row"></div>');
    $('.list-items-label').append('<div class="col-sm-1 text-left">Quantity</div>');
    $('.list-items-label').append('<div class="col-sm-5 text-left ">Description</div>');
    $('.list-items-label').append('<div class="col-sm-5 text-left">Value of High Priced Items</div>');

    const baseItemsElements = `<div class="list-item row">
<div class="col-sm-1 form-group"><input type="text" class="quantity form-control"></div>
<div class="col-sm-5 form-group"><input type="text" class="description form-control"></div>
<div class="col-sm-5 form-group"><input type="text" class="item-price form-control"></div>
</div>`;

    const newItemsElements = `<div class="list-item row">
<div class="col-sm-1 form-group"><input type="text" class="quantity form-control"></div>
<div class="col-sm-5 form-group"><input type="text" class="description form-control"></div>
<div class="col-sm-5 form-group"><input type="text" class="item-price form-control"></div>
<div class="col-sm-1 delete-list-item"><i class="fa fa-times delete-list-item-icon"></i></div>
</div>`;

    $('.list-items-label').after('<div class="list-items-details"></div>');
    $('.list-items-details').append(baseItemsElements);

    $('.add-new-field-button').click(function () {
        $('.list-items-details').append(newItemsElements);
    });

    $(document).on("click", ".delete-list-item-icon", function () {
        $(this).parent().parent().remove();
    });

    $('#CF58d08eacd85d1_1').submit(function (e) {
        e.preventDefault();
        let values = '';
        $('.list-item').each(function (i, obj) {
            if ($(obj).find('input').val() !== '') {
                values = values + $(obj).find('.quantity').val() + '/';
                values = values + $(obj).find('.description').val() + '/';
                values = values + $(obj).find('.item-price').val() + ',';
            }
        });
        $('.list-items-content').val(values);
    });
});

$(function () {
    $('.caldera_forms_form [value=Cancel]').attr('data-dismiss', 'modal');

    $('.caldera_forms_form').submit(function (e) {
        e.preventDefault();
        function explode() {
            $('.form-success-info').toggleClass('hide');
        }

        explode();
        setTimeout(explode, 3000);
        function submit() {
            $(this).toggleClass('hide');
        }

        setTimeout(submit, 5000);
        this.submit();
    });
});
