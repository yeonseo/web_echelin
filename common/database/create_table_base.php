<?php

//테이블 양식에 맞춰서 적어 넣음

function create_table($con, $table_name)
{
    $flag = "NO";
    $sql = "show tables from echelin";
    $result = mysqli_query($con, $sql) or die('Error: ' . mysqli_error($con));

    while ($row = mysqli_fetch_row($result)) {
        if ($row[0] === "$table_name") {
            $flag = "OK";
            break;
        }
    } //end of while

    if ($flag === "NO") {
        switch ($table_name) {
                //멤버테이블
            case 'members':
                $sql = "CREATE TABLE `members` (
                    `num` int unsigned NOT NULL AUTO_INCREMENT,
                    `id` varchar(20) NOT NULL,
                    `pass` varchar(15) DEFAULT NULL,
                    `name` varchar(10) NOT NULL,
                    `email` varchar(80) DEFAULT NULL,
                    `regist_day` char(20)  DEFAULT NULL,
                    `level` int DEFAULT NULL,
                    `point` varchar(45) DEFAULT NULL,
                    PRIMARY KEY (`num`)
                ) DEFAULT CHARSET=utf8;
                ";
                break;

                //메세지
            case 'message':
                $sql = "CREATE TABLE `message` (
                    `num` int unsigned NOT NULL AUTO_INCREMENT,
                    `send_id` varchar(20) NOT NULL,
                    `rv_id` varchar(20) NOT NULL,
                    `subject` varchar(200) NOT NULL,
                    `content` text NOT NULL,
                    `regist_day` varchar(20) NOT NULL,
                    PRIMARY KEY (`num`)
                ) DEFAULT CHARSET=utf8;
                ";
                break;

                //게시판
            case 'board':
                $sql = "CREATE TABLE `board` (
                    `num` int unsigned NOT NULL AUTO_INCREMENT,
                    `group_num` int unsigned NOT NULL,
                    `group_depth` int unsigned NOT NULL,
                    `group_order` int unsigned NOT NULL,
                    `id` varchar(20) NOT NULL,
                    `name` varchar(10) NOT NULL,
                    `subject` varchar(200) NOT NULL,
                    `content` text NOT NULL,
                    `regist_day` varchar(20) NOT NULL,
                    `hit` int unsigned NOT NULL,
                    `file_name` varchar(45) DEFAULT NULL,
                    `file_copied` varchar(45) DEFAULT NULL,
                    `file_type` varchar(45) DEFAULT NULL,
                    PRIMARY KEY (`num`)
                    ) DEFAULT CHARSET=utf8;
                    ";
                break;
        } //end of switch

        if (mysqli_query($con, $sql)) {
            echo "<script>alert('$table_name 테이블이 생성되었습니다.');</script>";
        } else {
            echo "실패원인" . mysqli_error($con);
        }

        insert_table($con, $table_name);
    } //end of if flag
} //end of function


function insert_table($con, $table_name)
{
    switch ($table_name) {
            //멤버테이블
        case 'members':
            $sql = "INSERT INTO `message` (`num`, `send_id`, `rv_id`, `subject`, `content`, `regist_day`) VALUES
            (1, 'aaaaaa', 'aaaaaa1', '일기예보 보고도 우산안챙겨따...', 'ㅜㅜㅜㅜㅜㅜㅜㅜㅜ', '2020-02-10 (20:55)'),
            (2, 'aaaaaa', 'aaaaaa1', 'bbbbbb', 'bbbbbbbbbb', '2020-02-10 (21:28)'),
            (3, 'mooguan', 'dustjnara', '지금 DB테이블 확인해주세요~', '수정사항 적용해서 다시 만들어 보았습니다.', '2020-02-11 (16:34)'),
            (4, 'mooguan', 'dongun', '사용자가 로그인시 보여야할 사항이있을까요?', '지금 메인화면을 구현하고 있습니다. \r\n참고사항 알려주시면 적용해서 메인페이지 만들겠습니다. :-)', '2020-02-11 (16:35)');
        ";
            break;

        case 'message':
            $sql = "INSERT INTO `members` (`num`, `id`, `pass`, `name`, `email`, `regist_day`, `level`, `point`) VALUES
            (1, 'dustjnara', '123', '남연서', 'ys@d.c', '2020-01-31 (07:09)', 1, '1000'),
            (2, 'aaaaaa', 'A1231231234', 'yeonseo', 'ys@d.c', '2020-01-31 (07:16)', 1, '1500'),
            (3, 'sungmin', 'Sungmin1', '김성민', 'aa@aa.aa@', '2020-02-01 (04:08)', 2, '600'),
            (4, 'kimjisoo', 'Jisoo111', '김지수', 'aa@aa.aa@', '2020-02-01 (04:09)', 9, '500'),
            (5, 'dongun', 'Dongun11', '하동운', 'aa@aa.aa@', '2020-02-01 (04:10)', 9, '500'),
            (6, 'mooguan', 'Mooguan1', '이무권', 'aa@aa.aa@', '2020-02-01 (04:10)', 9, '600'),
            (7, 'yungsam', 'Yungsam1', '유영삼', 'aa@aa.aa@', '2020-02-01 (04:12)', 9, '500'),
            (9, 'aaaaaa1', 'A123123123', '남연서', 'ys@d.c@', '2020-02-04 (02:41)', 9, '0');
        ";
            break;

        case 'board':
            $sql = "INSERT INTO `board` (`num`, `group_num`, `group_depth`, `group_order`, `id`, `name`, `subject`, `content`, `regist_day`, `hit`, `file_name`, `file_copied`, `file_type`) VALUES
            (31, 31, 0, 0, 'aaaaaa', 'yeonseo', '첫 게시물 입니다.', '첫 게시글 내용입니다.', '2020-02-11 (07:29)', 0, '', '', ''),
            (32, 32, 0, 0, 'aaaaaa', 'yeonseo', '파일을 첨부한 예시입니다.', '파일을 첨부합니다.', '2020-02-11 (07:30)', 0, 'cat0006.jpeg', '2020_02_11_07_30_04_cat0006.jpeg', 'image/jpeg'),
            (33, 33, 0, 0, 'aaaaaa', 'yeonseo', '요즘 날씨가 따뜻해졌네요!', '그치만 밤으로는 추우니 따뜻하게 입으세요 :-)', '2020-02-11 (07:30)', 1, '', '', ''),
            (34, 34, 0, 0, 'sungmin', '김성민', '안녕하세요 반갑습니다.', '잘 부탁드립니다.', '2020-02-11 (07:31)', 0, '37224268-cats-images.jpg', '2020_02_11_07_31_51_37224268-cats-images.jpg', 'image/jpeg'),
            (35, 33, 1, 1, 'sungmin', '김성민', 'Re : 요즘 날씨가 따뜻해졌네요!', ' 맞아요. 어제 저녁에 많이 춥더라구요! 감기 조심하세요\r\n-------------------------------------------------------------------- \r\n Re ( 33 ): 그치만 밤으로는 추우니 따뜻하게 입으세요 :-)', '2020-02-11 (07:32)', 0, '', '', ''),
            (36, 36, 0, 0, 'mooguan', '이무권', '프로젝트는 잘 진행되고 있습니다.', '메인화면 뷰를 만들고 있습니다.\r\n아마 내일이면 완료될 것 같아요.', '2020-02-11 (07:33)', 0, '', '', '');
        ";
            break;
    } //end of switch

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('$table_name 테이블에 데이터베이스가 생성되었습니다.');</script>";
    } else {
        echo "실패원인" . mysqli_error($con);
    }
}//end of function
