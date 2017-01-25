<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Awesome Calendar</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
        }

        div.cont{
            width: 650px;
            position:relative;
            margin: 0 auto;
        }

        h2.mainHeading{
            text-align:center;
        }
        input.year{
            border: none;
            font-size: 44px;
            width: 107px;
            outline: none 0;
            text-align: center;
            margin: 0 auto;
            display: block;
            font-weight: bold;
        }
        div.month{
            display:inline;
            font-size:0.7em;
            padding: 10px;
            float:left;
            position:relative;
            height:130px;
        }
        .month table caption, .month table th,  h2.mainHeading {
            border-bottom: 1px solid black;
        }
        .weekend{
            color: red;
        }
        .year {
            font-weight: bold;
            font-size: 250%;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="cont">

        <div class="year">
            <?php
            $year = 2017;
            echo $year;
            ?>
        </div>

        <hr>

        <?php
        for($i=1; $i<=12; $i++){
            printMonthCalendar($year, $i);
        }
        ?>
    </div>

</body>
</html>

<?php
function printMonthCalendar($year, $month){
    $firstDay = mktime(0,0,0,$month,1,$year);
    $date = getdate($firstDay);
    $lastDay = date('d', strtotime("last day of {$date['month']} {$year}"));
    $day = intval(checkDay($firstDay));
    $month = nameMonth($date['month']);

    echo "
    <div  class='month'>
    <table>
        <thead>
        <caption><strong>{$month}</strong></caption>
        <tr>
            <th>По</th>
            <th>Вт</th>
            <th>Ср</th>
            <th>Чт</th>
            <th>Пе</th>
            <th class='weekend'>Сб</th>
            <th class='weekend'>Не</th>
        </tr>
        </thead>
        <tbody>\n";
    echo "<tr>".str_repeat("\t\t<td></td>\n", $day-1);

    for($i=1; $i<=$lastDay; $i++){
        if($day==1) {
            echo "            <tr>\n";
        }
        $day++;
        if($i>=1 && $i<=9){
            echo "                <td>0{$i}</td>\n";
        } else {
            echo "                <td>{$i}</td>\n";
        }
        if($day>7){
        $day=1;
        echo "            </tr>\n";
        }
    }
    echo "
        </tbody>
    </table>
    </div>";
}

function checkDay($date){
    $dateToCheck = date('d-m-Y',$date);
    $day = date('N', strtotime($dateToCheck));
    return $day;
}

function nameMonth($latinName){
    switch($latinName){
        case "January":
            return "Януари";
        case "February":
            return "Февруари";
        case "March":
            return "Март";
        case "April":
            return "Април";
        case "May":
            return "Май";
        case "June":
            return "Юни";
        case "July":
            return "Юли";
        case "August":
            return "Август";
        case "September":
            return "Септември";
        case "October":
            return "Октомври";
        case "November":
            return "Ноември";
        case "December":
            return "Декември";
    }
}
?>

