/**
 * Created by Tatev on 7/21/2017.
 */

var token = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function(){
    $('#myTable').DataTable();
});


//=============================  UPDATE ========================//

$(document).on('click', '.iconUpdate', function () {
    $('.updateForm').html('');
    parent = $(this).data('status');
    url = $('[data-target="' + parent + '"]').data('href_update');
    prod = $('[data-target="' + parent + '"]').data('prod');
    data = {prod: prod, key: 'one', _token: token};
    $.ajax({
        url: url,
        type: 'post',
        data: data,
        success: function (data) {
            if (data != 0) {
                $('.updateForm').html(data);
                $('.sort, #sortable').sortable();
            }
            else {
                $(".msj-success").html(data);
                $(".msj-success").fadeIn();
                setTimeout(function () {
                    $(".msj-success").fadeOut();
                    $(".msj-success").html('<ul></ul>');
                }, 5000);
            }
        },
        error: function (e) {
            // ajaxError(e);
        }
    });
});



//=============================  Crop Single Image ========================//
$(document).on("change", '.upload2', function () {
    $(".cr-image").fadeIn();
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie("bind", {
            url: e.target.result,
        }).then(function () {
            $w = $('.basic-width'),
                $h = $('.basic-height'),

                $uploadCrop.croppie('bind', {
                    url: e.target.result,

                });
        });
    };
    reader.readAsDataURL(this.files[0]);
});


$(document).on('submit', ".formImage", function (form) {
    form = form;
    f = $(this);
    $uploadCrop.croppie('result', {

        type: 'canvas',
        size: {
            width: w,
            height: h
        },
    }).then(function (resp) {
        if ($(f).find('input[type="file"]').val()) {
            $(f).find('input[name="image"]').val(resp);
        }
    });
});
