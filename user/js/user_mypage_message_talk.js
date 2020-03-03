$('#message_send_btn').click(function () {
    //쪽지용
    if (!$('#message_content').val() | $('#message_content').val() === '') {
        alert("내용을 입력하세요!");
        $('#message_content').focus();
        return;
    } else {
        var clickBtnValue = $('#message_send_btn').val();
        var message_group_num = $('#message_group_num').val();
        var send_id = $('#send_id').val();
        var rv_id = $('#rv_id').val();
        var message_content = $('#message_content').val();
        // alert("값 가져옴!!!" + clickBtnValue + " " + message_group_num + " " + message_content + " ");
        $.ajax({
            type: "POST",
            url: './user_mypage_manage_db.php',
            data: {
                'action': clickBtnValue,
                'message_group_num': message_group_num,
                'send_id': send_id,
                'rv_id': rv_id,
                'message_content': message_content
            },
            success: function (data) {
                $(document).ready(function () {
                    $('#message_input_row').after(data);
                    $('#message_content').val('');
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