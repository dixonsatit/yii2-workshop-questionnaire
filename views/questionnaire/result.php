<?php
use dosamigos\chartjs\ChartJs;
$time = time();

// asDate
Yii::$app->formatter->locale = 'en-US';
echo Yii::$app->formatter->asDate($time, 'short')."<br>";
echo Yii::$app->formatter->asDate($time, 'medium')."<br>";
echo Yii::$app->formatter->asDate($time, 'long')."<br>";
echo Yii::$app->formatter->asDate($time, 'full')."<br>";

Yii::$app->formatter->locale = 'th';
echo Yii::$app->formatter->asDate('2015-06-05', 'short')."<br>";
echo Yii::$app->formatter->asDate($time, 'medium')."<br>";
echo Yii::$app->formatter->asDate($time, 'long')."<br>";
echo Yii::$app->formatter->asDate($time, 'full')."<br>";

// asDateTime
Yii::$app->formatter->locale = 'en-US';
echo Yii::$app->formatter->asDateTime($time, 'short')."<br>";
echo Yii::$app->formatter->asDateTime($time, 'medium')."<br>";
echo Yii::$app->formatter->asDateTime($time, 'long')."<br>";
echo Yii::$app->formatter->asDateTime($time, 'full')."<br>";

Yii::$app->formatter->locale = 'th';
echo Yii::$app->formatter->asDateTime($time, 'short')."<br>";
echo Yii::$app->formatter->asDateTime($time, 'medium')."<br>";
echo Yii::$app->formatter->asDateTime($time, 'long')."<br>";
echo Yii::$app->formatter->asDateTime($time, 'full')."<br>";
?>
<?= ChartJs::widget([
    'type' => 'Line',
    'options' => [
        'height' => 400,
        'width' => 400
    ],
    'data' => $lineChart
]);
?>
<?= ChartJs::widget([
    'type' => 'Bar',
    'options' => [
        'height' => 400,
        'width' => 400
    ],
    'data' => [
        'labels' => ["January", "February", "March", "April", "May", "June", "July"],
        'datasets' => [
            [
                'fillColor' => "rgba(220,220,220,0.5)",
                'strokeColor' => "rgba(220,220,220,1)",
                'pointColor' => "rgba(220,220,220,1)",
                'pointStrokeColor' => "#fff",
                'data' => [65, 59, 90, 81, 56, 55, 40]
            ],
            [
                'fillColor' => "rgba(151,187,205,0.5)",
                'strokeColor' => "rgba(151,187,205,1)",
                'pointColor' => "rgba(151,187,205,1)",
                'pointStrokeColor' => "#fff",
                'data' => [28, 48, 40, 19, 96, 27, 100]
            ]
        ]
    ]
]);
?>
<?= ChartJs::widget([
    'type' => 'Radar',
    'options' => [
        'height' => 400,
        'width' => 400
    ],
    'data' => [
        'labels' => ["January", "February", "March", "April", "May", "June", "July"],
        'datasets' => [
            [
                'fillColor' => "rgba(220,220,220,0.5)",
                'strokeColor' => "rgba(220,220,220,1)",
                'pointColor' => "rgba(220,220,220,1)",
                'pointStrokeColor' => "#fff",
                'data' => [65, 59, 90, 81, 56, 55, 40]
            ],
            [
                'fillColor' => "rgba(151,187,205,0.5)",
                'strokeColor' => "rgba(151,187,205,1)",
                'pointColor' => "rgba(151,187,205,1)",
                'pointStrokeColor' => "#fff",
                'data' => [28, 48, 40, 19, 96, 27, 100]
            ]
        ]
    ]
]);
?>