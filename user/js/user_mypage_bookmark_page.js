var modifyButton = 0;
var togglePwd = 0;

// 토글 변수를 사용해서 입력값의 유무 상태를 기록한다.(입력값 없을 시 0)
// 이를 통해 입력값을 지울 경우 입력값이 없는 상태로 업데이트 가능하다.
// judgeBtn 함수를 호출하여 버튼 활성화 여부를 결정한다.
function setModifyButton() {
    if (modifyButton === 0) {
        modifyButton = 1;
        $('#restaurant_bookmark_modify').text('편집취소');
        $('.bookmark_btn_box').prepend("<button type='button' class='button_next' id='restaurant_bookmark_delete' value='delete_bookmark' onclick='deleteBookmark()'>선택삭제</button>");
        btnDisabled();
    } else {
        modifyButton = 0;
        $('#restaurant_bookmark_modify').text('편집하기');
        $("button").remove("#restaurant_bookmark_delete");
        btnEnabled();
    }
}

function btnDisabled() {
    //체크박스 생성하고, 
    $('.card_menu_btn').attr('disabled', true);
    $('.check_all_box').show();
    $('.bookmark_checkbox').show();
}


function btnEnabled() {
    //체크박스 삭제
    $('.card_menu_btn').removeAttr('disabled');
    $('.check_all_box').hide();
    $('.bookmark_checkbox').hide();
}

function setShadow() {
    console.log('setShadow');
    $('#submit-btn').css('box-shadow', '0 2px 4px 0 rgba(0, 0, 0, 0.50)');
}

function setShadowNone() {
    $('#submit-btn').css('box-shadow', 'none');
}

function deleteBookmark() {
    //bookmark
    if ($('.check_all').is(':checked')) {
        // alert("all!!!");
    }
    $('.bookmark_checkbox:checked').each(function () {
        if ($(this).is(':checked')) {

            var clickBtnValue = $('#restaurant_bookmark_delete').val();
            var bookmark_group_num = $('#restaurant_bookmark_group').val();
            var seller_num = $(this).val();

            alert(clickBtnValue + bookmark_group_num + seller_num);

            $.ajax({
                type: "POST",
                url: '../user/user_mypage_manage_db.php',
                data: {
                    'action': clickBtnValue,
                    'bookmark_group_num': bookmark_group_num,
                    'seller_num': seller_num
                },
                success: function (data) {
                    if (data === "delete_succeed") {
                        alert("북마크가 삭제 되었습니다.");
                        var $remove_btn = String("#seller_num") + String(seller_num);
                        $("div").remove($remove_btn);
                    } else {
                        alert("북마크가 잘못되었습니다.");
                    }
                },
                error: function (data) {
                    alert("Data return: " + data);
                }
            }).done(function (msg) {
                // alert("Data Saved: " + msg);
            });

        }
    });
}

$(document).ready(function () {
    $('.check_all').click(function () {
        $('.bookmark_checkbox').prop('checked', this.checked);
    });
});



btnEnabled();