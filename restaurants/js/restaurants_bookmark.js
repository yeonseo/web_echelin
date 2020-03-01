var $selected_bookmark_group;
var $selected_bookmark_subject;

$('#restaurant_mylist_btn').click(function () {
    var clickBtnValue = $('#restaurant_bookmark_btn').val();
    var seller_num = $('#restaurant_seller_id').val();
    // alert("값 가져옴!!!" + clickBtnValue + " " + message_group_num + " " + message_content + " ");
    $.ajax({
        type: "POST",
        url: '../restaurants_bookmark_db.php',
        data: {
            'action': clickBtnValue,
            'seller_num': seller_num
        },
        success: function (data) {
            $(document).ready(function () {
                $('#restaurant_bookmark_btn i').css("color", "ORANGERED");
            });
        },
        error: function (data) {
            alert("Data return: " + data);
        }
    }).done(function (msg) {
        // alert("Data Saved: " + msg);
    });
});



$('#restaurant_bookmark_btn').click(function () {
    // var $class = $(this).attr('class');
    layer_popup('#layer2');
});

function layer_popup(el) {
    var $el = $(el);        //레이어의 id를 $el 변수에 저장
    var isDim = $el.prev().hasClass('dimBg');   //dimmed 레이어를 감지하기 위한 boolean 변수

    isDim ? $('.dim_layer').fadeIn() : $el.fadeIn();

    var $elWidth = ~~($el.outerWidth()),
        $elHeight = ~~($el.outerHeight()),
        docWidth = $(document).width(),
        docHeight = $(document).height();

    // 화면의 중앙에 레이어를 띄운다.
    if ($elHeight < docHeight || $elWidth < docWidth) {
        $el.css({
            marginTop: -$elHeight / 2,
            marginLeft: -$elWidth / 2
        })
    } else {
        $el.css({ top: 0, left: 0 });
    }


    $el.find('.selected_bookmark_group').click(function () {
        $selected_bookmark_group = $(this).val();
        $selected_bookmark_subject = $(this).children("input").val();
        var $selected_bookmark_id = String("#selected_bookmark_group") + String($selected_bookmark_group);
        $(document).ready(function () {
            $($selected_bookmark_id).css("color", "orangered");
            $("i").not($selected_bookmark_id).css("color", "black");
        });
        // alert($selected_bookmark_group, $selected_bookmark_subject);
    });

    $el.find('#button_popup_close').click(function () {
        isDim ? $('.dim_layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
        return false;
    });

    $('.layer .dimBg').click(function () {
        $('.dim_layer').fadeOut();
        return false;
    });

}


$('#restaurant_bookmark_update').click(function () {
    //bookmark
    if (!$selected_bookmark_subject | $selected_bookmark_subject === '' | !$selected_bookmark_group | $selected_bookmark_group === '') {
        alert("북마크를 선택하세요!");
        // $('#message_content').focus();
        return;
    } else {
        var clickBtnValue = $('#restaurant_bookmark_update').val()
        var bookmark_subject = $selected_bookmark_subject;
        var bookmark_group_num = $selected_bookmark_group;
        var seller_num = $('#restaurant_seller_id').val();
        alert("값 가져옴!!!" + clickBtnValue + " " + bookmark_subject + " " + bookmark_group_num + " " + seller_num + " ");
        $.ajax({
            type: "POST",
            url: '../user/user_mypage_message_insert.php',
            data: {
                'action': clickBtnValue,
                'bookmark_subject': bookmark_subject,
                'bookmark_group_num': bookmark_group_num,
                'seller_num': seller_num
            },
            success: function (data) {
                if (data === "bookmarked") {
                    alert("북마크에 이미 있습니다.");
                } else {

                }
                $(document).ready(function () {
                    alert(data);
                });
            },
            error: function (data) {
                alert("Data return: " + data);
            }
        }).done(function (msg) {
            // alert("Data Saved: " + msg);
        });
    }
});