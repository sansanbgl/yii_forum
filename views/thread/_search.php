<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ThreadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thread-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_thread') ?>

    <?= $form->field($model, 'title_thread') ?>

    <?= $form->field($model, 'content_thread') ?>

    <?= $form->field($model, 'create_thread') ?>

    <?= $form->field($model, 'update_thread') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
