<?php
use dosamigos\chartjs\ChartJs;
//Yii::$app->ChartJsData->createPieDataSet();
   \yii\helpers\Vardumper::dump($lineChart,10,true);
?>

<?= ChartJs::widget([
    'type' => 'Pie',
    'options' => [
        'height' => 100,
        'width' => 100
    ],
    'data' => [
        [
            'value'=> 300,
            'color'=>"#F7464A",
            'highlight'=> "#FF5A5E",
            'label'=> "Red"
        ],
        [
            'value'=> 50,
            'color'=> "#46BFBD",
            'highlight'=> "#5AD3D1",
            'label'=> "Green"
        ],
        [
            'value'=> 100,
            'color'=> "#FDB45C",
            'highlight'=> "#FFC870",
            'label'=> "Yellow"
        ]
    ]
]);
?>
