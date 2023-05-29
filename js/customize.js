
var siteurl = window.location.origin + "/Yas_Site/";

$("#login").on('submit', function (e) {
    e.preventDefault();
    $('.btn-sbmit').attr('disabled', 'disabled');
    $.ajax({
        url: siteurl + 'admin/include/fetch.php?page=login',
        type: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function (result) {
            // alert(result);
            $('.btn-sbmit').removeAttr('disabled');
            $("#alert").html('<div class="kt-alert kt-alert--outline alert alert-' + result["res"] + ' alert-dismissible" role="alert"><span>' + result["msg"] + '</span></div>');
            if (result["status"] == "success") {
         
                    setTimeout(function () {
                        window.open('admin/', '_self');
                    }, 1000);
                
            }
        }
    })
});
 