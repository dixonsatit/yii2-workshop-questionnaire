<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QuestionnaireSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Questionnaires');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionnaire-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Questionnaire'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            'id',
            'created_at:dateTime',
            'occupationName',
            'officeName',
            ['attribute'=>'created_at','format'=>'html','value'=>function($model, $key, $index, $column){
                return Yii::$app->formatter->asDate($model->created_at,'medium'); //short,medium,long,full
                //return Yii::$app->formatter->asDateTime($model->created_at,'medium');
            }],
            //'choice_content',
            //'choice_contest',
            // 'choice_seminar',
            // 'choice_ict',
            // 'choice_food',
            // 'choice_news',
            // 'choice_register',
            // 'choice_environment',
            // 'choice_audiovisual',
            // 'choice_location',
            // 'choice_overall',
            // 'adjust',
            // 'batter',
            // 'created_at',
            // 'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                 'buttonOptions'=>['class'=>'btn btn-default'],
                 'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {delete} </div>'
            ],
        ],
    ]); ?>

</div>
