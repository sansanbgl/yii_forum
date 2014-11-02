<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thread */

$this->title = 'Update Thread: ' . ' ' . $model->id_thread;
$this->params['breadcrumbs'][] = ['label' => 'Threads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_thread, 'url' => ['view', 'id' => $model->id_thread]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thread-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
