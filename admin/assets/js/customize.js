
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
            if (result["res"] == "success") {
                if (result["status"] == 1) {
                    setTimeout(function () {
                        window.open(result["redirect"], '_self');
                    }, 1000);
                }
            }
        }
    })
});

$("#add").on("submit", function (e) {
    e.preventDefault();
    var page = $("#page").val();
    $(".btn-sbmit").attr("disabled", "disabled");
    $(".btn-sbmit").html('<i class="fa-spinner fa-spin fa "></i>')
    $.ajax({
        url: siteurl + "admin/include/insert.php?page=" + page,
        type: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function (result) {
            //  alert(result);
            $(".btn-sbmit").removeAttr("disabled");
            $.notify(result.msg, result.status);
            $("#alert").html(
                `<div class="alert m-2 alert-${result.status} inverse alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
          <p class='m-0'> ${result.msg}</p></div>`
            );

            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            if (page === 'property') {
                $('div.gallery').html(' ')
            }
            if (result['status'] == 'success') {
                $("#add").trigger("reset");
            }
        },
    });
    $(".btn-sbmit").html('Add')
});
$("#update").on("submit", function (e) {
    // alert ('omk')
    e.preventDefault();
    var page = $("#page").val();
    $(".btn-sbmit").attr("disabled", "disabled");
    $(".btn-sbmit").html('<i class="fa-spinner fa-spin fa "></i>')
    $.ajax({
        url: siteurl + "admin/include/update.php?page=" + page,
        type: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function (result) {
            $(".btn-sbmit").html('Update')
            $(".btn-sbmit").removeAttr("disabled");
            $.notify(result.msg, result.status);
            $("#alert").html(
                `<div class="alert m-2 alert-${result.status} inverse alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
          <p class='m-0'> ${result.msg}</p></div>`
            );
            if (page === 'property') {
                fetchpropImages();
            }
        },
    });
});

jQuery(document).on('click', ".sure-dlt", function () {
    let id = $(this).attr('id');
    $.ajax({
        url: siteurl + "admin/include/delete.php?page=propimg",
        type: "POST",
        data: { id: id },
        dataType: "JSON",
        success: function (result) {
            if (result['status'] == 'success') {

                $('#delete-image').modal('hide');
                $(`#prop-${id}`).parent().fadeOut();
            }

            $.notify(result.msg, result.status);
        }

    })
})
function fetchpropImages() {
    let id = $("#updateid").val();
    $.ajax({
        url: siteurl + "admin/include/fetch.php?page=propimg",
        type: "POST",
        data: { id: id },
        success: function (result) {
            $(".update-image").html(result);
        }
    })
}
jQuery(document).on('click', '.delete-img', function () {
    let id = $(this).attr('id');
    let img = $(`#prop-${id}`).attr('src');
    $(".sure-dlt").attr('id', id);
    $("#mdlImg").attr("src", img)
    $('#delete-image').modal('show')
})



jQuery(document).on("submit", "#delete", function (e) {
    //   alert();
    e.preventDefault();
    $(".btn-sbmit").attr("disabled", "disabled");
    var page = $("#delete_page").val();
    $.ajax({
        url: siteurl + "admin/include/delete.php?page=" + page,
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "JSON",
        success: function (result) {
            //  alert(result);
            $(".btn-sbmit").removeAttr("disabled");
            if (result['status'] == "success") {
          
                setTimeout(() => {
                    location.reload();

                }, 1000);
            }
            $.notify(result.msg, result.status);
        },
    });
});
$("#fupdate").on("submit", function (e) {
    // alert ('omk')
    e.preventDefault();
    var page = $("#page-update").val();
    $(".btn-sbmit").attr("disabled", "disabled");
    $.ajax({
        url: "admin/include/update.php?page=" + page,
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "JSON",
        success: function (result) {
            //  alert(result)
            $(".btn-sbmit").removeAttr("disabled");
            if (result['res'] == "success") {
                $("#alertuser").html(
                    '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><i class="icon-thumb-up alert-center"></i><p><b> Well done! </b>Successfully Updated.</p></div>'
                );
                // $("#update").trigger('reset');
                $("html, body").animate(
                    {
                        scrollTop: 0,
                    },
                    1000
                );
            } else if (result['res'] == "databasewrong") {
                $("#alertuser").html(
                    '<div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><i class="icon-thumb-down"></i><p>Something Error on Database</p></button></div>'
                );
                $("html, body").animate(
                    {
                        scrollTop: 0,
                    },
                    1000
                );
            } else if (result['res'] == "format") {
                $("html, body").animate(
                    {
                        scrollTop: 0,
                    },
                    1000
                );
                $("#alertuser").html(
                    '<div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><i class="icon-thumb-down"></i><p>Incorrect Image Format</p></button></div>'
                );
            }
        },
    });
});
$("#forgotpassword").on("submit", function (e) {
    e.preventDefault();
    $("button:submit").attr("disabled", "disabled");
    $.ajax({
        url: "include/fetch.php?page=forgot",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (result) {
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            $("button:submit").removeAttr("disabled");
            if (result.result == "true") {
                $("#forgotpassword").trigger("reset");
                $("#alert").html(
                    '<br><div class=" alert-success kt-alert kt-alert--outline alert alert-blue alert-dismissible" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>Successfully Send account Recover code on your email !</span></div>'
                );
            } else if (result.result == "databasewrong") {
                $("#alert").html(
                    '<br><div class="kt-alert kt-alert--outline  alert-danger alert alert-orange alert-dismissible" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>Something Error on Database</span></div>'
                );
            } else if (result.result == "req") {
                $("#alert").html(
                    '<br><div class="kt-alert kt-alert--outline  alert-danger alert alert-orange alert-dismissible" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>Email/Username Field are Required</span></div>'
                );
            } else if (result.result == "notfound") {
                $("#alert").html(
                    '<br><div class="kt-alert kt-alert--outline alert alert-orange  alert-danger alert-dismissible" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>This email not found</span></div>'
                );
            }
        },
    });
});
$("#updatepassword_reset").on("submit", function (e) {
    e.preventDefault();
    $("button:submit").attr("disabled", "disabled");
    $.ajax({
        url: "include/update.php?page=updatepassword_reset",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (result) {
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            $("button:submit").removeAttr("disabled");
            if (result.result == "true") {
                $("#updatepassword_reset").trigger("reset");
                $("#alert").html(
                    '<br><div class="kt-alert kt-alert--outline alert alert-blue alert-dismissible alert-success" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>Your Password Successfully Updated Kindly Login Your Account</span></div>'
                );
                setTimeout(function () {
                    window.open("index", "_self");
                }, 2000);
            } else if (result.result == "databasewrong") {
                $("#alert").html(
                    '<br><div class="kt-alert kt-alert--outline alert alert-orange alert-dismissible alert-danger" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>Something Error on Database</span></div>'
                );
            } else if (result.result == "databasewrong") {
                $("#alert").html(
                    '<br><div class="kt-alert kt-alert--outline alert alert-orange alert-dismissible alert-danger" alert-danger role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>Something Error on Database</span></div>'
                );
            } else if (result.result == "req") {
                $("#alert").html(
                    '<br><div class="kt-alert kt-alert--outline alert alert-orange alert-dismissible alert-danger" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>Email/Username Field are Required</span></div>'
                );
            } else if (result.result == "notmatch") {
                $("#alert").html(
                    '<br><div class="kt-alert kt-alert--outline alert alert-orange alert-dismissible alert-danger" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>Your Confirm Password Not Match</span></div>'
                );
            }
        },
    });
});
// plan active /not active
function statuss(id, status) {
    // alert('f');;
    var page = $("#page").val();
    $.ajax({
        url: "include/update.php?page=" + page,
        type: "POST",
        data: {
            page: page,
            id: id,
            status: status,
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html(
                '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' +
                res["msg"] +
                "</p></div>"
            );
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            setTimeout(() => {
                window.open("plans.php", "_self");
            }, 1500);
        },
    });
}
// student plan active/unactive
function stustatus(id, status) {
    // alert('f');;
    var page = $("#page").val();
    $.ajax({
        url: "include/update.php?page=" + page,
        type: "POST",
        data: {
            page: page,
            id: id,
            status: status,
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html(
                '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' +
                res["msg"] +
                "</p></div>"
            );
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            setTimeout(() => {
                window.open("students", "_self");
            }, 1500);
        },
    });
}
// service active/Unactive
function statusservice(id, status) {
    // alert('f');;
    var page = $("#page").val();
    $.ajax({
        url: "include/update.php?page=" + page,
        type: "POST",
        data: {
            page: page,
            id: id,
            status: status,
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html(
                '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' +
                res["msg"] +
                "</p></div>"
            );
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            setTimeout(() => {
                window.open("services", "_self");
            }, 1500);
        },
    });
}
// user active not active
function userstatus(id, status) {
    var page = $("#page").val();
    $.ajax({
        url: "include/update.php?page=" + page,
        type: "POST",
        data: {
            page: page,
            id: id,
            status: status,
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html(
                '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' +
                res["msg"] +
                "</p></div>"
            );
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            setTimeout(() => {
                location.reload();
            }, 1500);
        },
    });
}
function withdrwal(id) {
    //   var page = $("#page").val();
    $.ajax({
        url: "include/update.php?page=withdrwal",
        type: "POST",
        data: {
            //   page: page,
            id: id,
            //   status: status,
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html(
                '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' +
                res["msg"] +
                "</p></div>"
            );
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            setTimeout(() => {
                location.reload();
            }, 2000);
        },
    });
}
function offer_accepted(id) {
    var page = $("#page").val();
    $.ajax({
        url: "include/update.php?page=offer_accepted",
        type: "POST",
        data: {
            //   page: page,
            id: id,
            //   status: status,
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html(
                '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' +
                res["msg"] +
                "</p></div>"
            );
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            setTimeout(() => {
                location.reload();
            }, 1500);
        },
    });
}
function offer_rejected(id) {
    var page = $("#page").val();
    $.ajax({
        url: "include/update.php?page=offer_rejected",
        type: "POST",
        data: {
            //   page: page,
            id: id,
            //   status: status,
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html(
                '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' +
                res["msg"] +
                "</p></div>"
            );
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            setTimeout(() => {
                location.reload();
            }, 1500);
        },
    });
}
// block from admin
function blockk(id, block, page) {
    $.ajax({
        url: "include/update.php?page=" + page,
        type: "POST",
        data: {
            page: page,
            id: id,
            block: block,
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html(
                '<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' +
                res["msg"] +
                "</p></div>"
            );
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            setTimeout(() => {
                window.open("plans.php", "_self");
            }, 1500);
        },
    });
}
function del(id) {
    $("#del_page_id").val(id);
}
function dele(id) {
    $("#del_page_ids").val(id);
}
$("#promo_code").on('submit', function (e) {
    // alert();
    e.preventDefault();
    $('.btn-sbmit').attr('disabled', 'disabled');
    // var page = $("#delete_page").val();
    $.ajax({
        url: 'include/update.php?page=promo_code',
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "JSON",
        success: function (result) {
            //  alert(result);

            $('.btn-sbmit').removeAttr('disabled');
            if (result['res'] == "success") {
                $("#alert").html('<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>Promo Code Send Successfully.</p></div>');
                $("#promo_code").trigger('reset');
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                $('#promocodemodal').hide();
                $('.modal-backdrop.show').hide();

            } else if (result['res'] == "databasewrong") {
                $("#alert").html('<div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><p>Something Error on Database</p>');
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                $('#promocodemodal').hide();
                $('.modal-backdrop.show').hide();
            }
        }
    })
});

$("#send_msg").on('submit', function (e) {
    // alert();
    e.preventDefault();
    $('.btn-sbmit').attr('disabled', 'disabled');
    // var page = $("#delete_page").val();
    $.ajax({
        url: 'include/insert.php?page=send_msg_user',
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "JSON",
        success: function (result) {
            //  alert(result);

            $('.btn-sbmit').removeAttr('disabled');
            if (result['res'] == "success") {
                $("#alert").html('<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>Your Message Send Successfully.</p></div>');
                $("#promo_code").trigger('reset');
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                $('#send_msg').hide();
                $('#m-hide').hide();

                $('.modal-backdrop.show').hide();

            } else if (result['res'] == "databasewrong") {
                $("#alert").html('<div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><p>Something Error on Database</p>');
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                $('#send_msg').hide();
                $('#m-hide').hide();

                $('.modal-backdrop.show').hide();
            }
        }
    })
});
function changestatus() {
    $.ajax({
        url: 'include/update.php?page=change_msg_status',
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "JSON",
        success: function (result) {
            //  alert(result);

            $('.btn-sbmit').removeAttr('disabled');
            if (result['res'] == "success") {
                $("#alert").html('<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>Your Message Send Successfully.</p></div>');
                $("#promo_code").trigger('reset');
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                $('#send_msg').hide();

                $('.modal-backdrop.show').hide();

            } else if (result['res'] == "databasewrong") {
                $("#alert").html('<div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><p>Something Error on Database</p>');
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                $('#send_msg').hide();
                $('.modal-backdrop.show').hide();
            }
        }
    })
}

//   $(document).ready(function(){
//     status1();  
//     setInterval(status1, 3000);
//     status0();  
//     setInterval(status0, 3000);


// });
function status1() {

    $.ajax({
        url: "include/fetch.php?page=status1",
        type: "POST",
        data: {
            // token: token
        },
        cache: false,
        success: function (result) {
            //   alert (result);
            $('.refresh1').html(result);


        }
    });


}

function status0() {

    $.ajax({
        url: "include/fetch.php?page=status0",
        type: "POST",
        data: {
            // token: token
        },
        cache: false,
        success: function (result) {
            //   alert (result);
            $('.refresh0').html(result);


        }
    });


}
// studio status
function studiostatus(id, status) {
    // var page = $('#page').val();
    $.ajax({
        url: 'include/update.php?page=studio-status',
        type: 'POST',
        data: {
            // page: page,
            id: id,
            status: status
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html('<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' + res["msg"] + '</p></div>');
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            setTimeout(() => {
                location.reload();
            }, 1500);
        }
    })
}
// end studio status 
// studio verified
function verify(id, verify) {
    // var page = $('#page').val();
    $.ajax({
        url: 'include/update.php?page=studio-verify',
        type: 'POST',
        data: {
            // page: page,
            id: id,
            verify: verify
        },
        dataType: "JSON",
        success: function (res) {
            // alert(res);
            // console.log(res);
            $("#alert").html('<div class="alert alert-success inverse alert-dismissible fade show" role="alert"><p><b> Well done! </b>' + res["msg"] + '</p></div>');
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            setTimeout(() => {
                location.reload();
            }, 1500);
        }
    })
}