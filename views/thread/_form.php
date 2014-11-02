<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Thread */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thread-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_thread')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'content_thread')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'create_thread')->textInput() ?>

    <?= $form->field($model, 'update_thread')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
