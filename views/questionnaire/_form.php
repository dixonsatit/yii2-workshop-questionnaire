<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

echo $model->getChoiceName(0);

/* @var $this yii\web\View */
/* @var $model app\models\Questionnaire */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionnaire-form">


    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
<fieldset>
    <legend>ข้อมูลทั่วไป :</legend>
    <?= $form->field($model, 'occupation')->radioList($model->getItemsOccupation()) ?>

    <?= $form->field($model, 'office')->radioList($model->getItemsOffice()) ?>
     </fieldset>
    <fieldset>
    <legend>เลือกช่องที่ตรงกับความคิดเห็นของท่าน :</legend>

    <?= $form->field($model, 'choice_content')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_contest')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_seminar')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_ict')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_food')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_news')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_register')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_environment')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_audiovisual')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_location')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'choice_overall')->inline()->radioList($model->getItemsChoice()) ?>

    <?= $form->field($model, 'adjust')->textArea() ?>

    <?= $form->field($model, 'batter')->textArea() ?>
    </fieldset>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Submit') : Yii::t('app', 'Update'), ['class' => ($model->isNewRecord ? 'btn btn-success' : 'btn btn-primary').' btn-lg btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
