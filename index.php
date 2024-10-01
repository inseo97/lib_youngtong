<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영통 도서관</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://kakaomapapi.dothome.co.kr/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <!-- 5버전 -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

    <!-- 6버전 -->
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/test.css">
    <link rel="stylesheet" href="./css/webfont.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">

    <!-- <link rel="stylesheet" href="./css/admin.css"> -->
    <link rel="stylesheet" href="./css/board.css">
    <link rel="stylesheet" href="./css/members.css">



    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.min.js"></script>

    <script type="text/javascript" src="./js/script2.js"></script>
    <script type="text/javascript" src="./js/modernizr.js"></script>


    <!-- 달력 -->
    <script src="./source/calendar.js"></script>


    <style>
    /* 달력css */
    #calendarWrap {
        max-width: 300px;
    }

    td {
        width: 35px;
        height: 35px;
    }

    tr {
        color: #2b266e;
    }

    thead {
        border-bottom: solid 1px #2b266e;
        box-sizing: border-box;

    }

    tr td:first-child {
        color: #ff4848;
    }

    .Calendar {
        width: 300px;
        text-align: center;
        /* margin-left: 20px;
            margin-top: 20px; */
        position: absolute;
        max-width: 300px;
        top: 50%;
        transform: translateY(-50%);
        right: 20px;
        background-color: none;
        border-radius: 15px;
        border: solid 1px #2b266e;
        height: 288px;
        padding: 10px;
        box-sizing: border-box;
    }

    .Calendar>thead>tr:first-child>td:first-child {
        color: #2b266e;
    }


    .Calendar>thead>tr:first-child>td {
        font-weight: 900;
    }

    .Calendar>thead>tr:last-child>td {
        background-color: #ffffff;
        color: #2b266e;
        width: 30px;
        height: 25px;
    }

    .Calendar>thead>tr:last-child>td:first-child {
        color: #ff4848;
        border-radius: 50px 0 0 50px;

    }

    .Calendar>thead>tr:last-child>td:last-child {
        color: #4882ff;
        border-radius: 0 50px 50px 0;

    }

    .Calendar>tbody>tr>td {
        height: 35px;
    }

    /* .pastDay {
            background-color: lightgray;
        } */

    .today {
        background-color: #FFCA64;
        cursor: pointer;
        border-radius: 50%;
        font-weight: bold;
        color: #ffffff;
    }

    .futureDay {
        /* background-color: #FFFFFF; */
        cursor: pointer;
    }

    .futureDay.choiceDay,
    .today.choiceDay {
        background-color: #3E85EF;
        color: #979797;
        cursor: pointer;
    }

    input {
        border: none;
    }
    </style>

</head>

<body>
    <header>
        <?php include "./header.php" ?>
    </header>
    <?php include "./main.php" ?>
    <footer id="footer_outer">
        <?php include "./footer.php" ?>
    </footer>
</body>

</html>