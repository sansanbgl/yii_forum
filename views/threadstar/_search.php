<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ThreadstarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="threadstar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_threadstar') ?>

    <?= $form->field($model, 'rate_threadstar') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'thread_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
