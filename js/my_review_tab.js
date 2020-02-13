var $menuEle = $('#review_tab span'); // 탭메뉴를 변수에 지정
$menuEle.click(function() { // 탭메뉴 클릭 이벤트
    $('#review_tab div').addClass('hidden');
    $(this).next().removeClass('hidden');
})
