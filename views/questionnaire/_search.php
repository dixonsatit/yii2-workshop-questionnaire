<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QuestionnaireSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionnaire-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'occupation') ?>

    <?= $form->field($model, 'office') ?>

    <?= $form->field($model, 'choice_content') ?>

    <?= $form->field($model, 'choice_contest') ?>

    <?php // echo $form->field($model, 'choice_seminar') ?>

    <?php // echo $form->field($model, 'choice_ict') ?>

    <?php // echo $form->field($model, 'choice_food') ?>

    <?php // echo $form->field($model, 'choice_news') ?>

    <?php // echo $form->field($model, 'choice_register') ?>

    <?php // echo $form->field($model, 'choice_environment') ?>

    <?php // echo $form->field($model, 'choice_audiovisual') ?>

    <?php // echo $form->field($model, 'choice_location') ?>

    <?php // echo $form->field($model, 'choice_overall') ?>

    <?php // echo $form->field($model, 'adjust') ?>

    <?php // echo $form->field($model, 'batter') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
