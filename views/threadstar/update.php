<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Threadstar */

$this->title = 'Update Threadstar: ' . ' ' . $model->id_threadstar;
$this->params['breadcrumbs'][] = ['label' => 'Threadstars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_threadstar, 'url' => ['view', 'id' => $model->id_threadstar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="threadstar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
