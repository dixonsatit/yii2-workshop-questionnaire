<?php
use dosamigos\chartjs\ChartJs;
use app\models\Questionnaire;
//Yii::$app->ChartJsData->createPieDataSet();
   \yii\helpers\Vardumper::dump($pieChart,10,true);
?>


<?= ChartJs::widget([
    'type' => 'Pie',
    'options' => [
        'height' => 100,
        'width' => 100
    ],
    'data' => $pieChart[Questionnaire::TYPE_CONTENT]
]);?>

<?= ChartJs::widget([
    'type' => 'Pie',
    'options' => [
        'height' => 100,
        'width' => 100
    ],
    'data' => $pieChart[Questionnaire::TYPE_CONTEST]
]);?>
<?= ChartJs::widget([
    'type' => 'Pie',
    'options' => [
        'height' => 100,
        'width' => 100
    ],
    'data' => $pieChart[Questionnaire::TYPE_ICT]
]);?>
<?= ChartJs::widget([
    'type' => 'Pie',
    'options' => [
        'height' => 100,
        'width' => 100
    ],
    'data' => $pieChart[Questionnaire::TYPE_ICT]
]);?>
<?= ChartJs::widget([
    'type' => 'Pie',
    'options' => [
        'height' => 100,
        'width' => 100
    ],
    'data' => $pieChart[Questionnaire::TYPE_ICT]
]);?>
