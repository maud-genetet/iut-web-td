<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link rel="stylesheet" href="style.css">

</head>
<body><br>
<a id='index' href="index.php">Index</a>

    <h1>TD2: Les bases</h1>
    <br>
    <h2>Calendrier GET</h2>

<?php 

$days = ['lun','mar','mer','jeu','ven','sam','dim'];
$month = isset($_GET['month']) ? $_GET['month'] : date('n');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
/*
$month = date('n');
$year = date('Y');
*/

$firstDay = mktime(12,0,0,$month,1,$year);
$firstDayOfWeek = date('w',$firstDay) - 1;

if ($firstDayOfWeek < 0) $firstDayOfWeek = 6;
$day = 1 - $firstDayOfWeek;

$precMonth = $month-1;
$precYear = $year;
if ( $precMonth == 0){
    $precMonth = 12;
    $precYear -= 1;
}

$nextMonth = $month+1;
$nextYear = $year;
if ( $nextMonth > 12){
    $nextMonth = 1;
    $nextYear += 1;
}

echo "<a href='?month=".$precMonth."&year=".$precYear."'>&larr;</a>";
echo "<h1>".$year."/".$month."</h1>";
echo "<a href='?month=".$nextMonth."&year=".$nextYear."'>&rarr;</a>";
?>

<table>
    <tr>
        <?php foreach ($days as $dayName){
            echo "<th>".$dayName."</th>";
        }
        ?>
    </tr>
    <tr>
        
        <?php 
            do {
                echo "<tr>";
                foreach ($days as $dayName){
                    $curentDay = mktime(12,0,0,$month, $day, $year);
                    $dayNumber = date('d', $curentDay);
                    $day += 1;

                    $style = "";
                    if (date('m', $curentDay) != $month){
                        $style = "style=color:grey";
                    }
                    if (date('m', $curentDay) == date('m') &&
                        date('d', $curentDay) == date('d') &&
                        date('Y', $curentDay) == date('Y')){
                        $style = "style=color:red";
                    }
                    echo "<td ".$style.">".$dayNumber."</td>";
                }
                echo "</tr>";
            } while ( $day > 0 && date('m', $curentDay)== $month);
        ?>
    </tr>

</table>



</body>
</html>