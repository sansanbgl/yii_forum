<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'name_user') ?>

    <?= $form->field($model, 'password_user') ?>

    <?= $form->field($model, 'saltpassword_user') ?>

    <?= $form->field($model, 'email_user') ?>

    <?php // echo $form->field($model, 'level_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
