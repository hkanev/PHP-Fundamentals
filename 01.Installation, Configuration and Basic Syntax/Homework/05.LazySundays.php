<?php
$now = new DateTime('now');
$firstDay  = $now->format("Y-m-01");
$lastDay  = $now->format("Y-m-t");

$begin  = new DateTime($firstDay);
$end    = new DateTime($lastDay);
while ($begin <= $end)
{
    if($begin->format("D") == "Sun")
    {
        echo $begin->format("jS F, Y") . "<br>";
    }

    $begin->modify('+1 day');
}