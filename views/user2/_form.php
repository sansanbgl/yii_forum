<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_user')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'password_user')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'saltpassword_user')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'email_user')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'level_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
