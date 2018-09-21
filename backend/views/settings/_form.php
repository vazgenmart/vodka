<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value_am')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
