<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Threadstar */

$this->title = $model->id_threadstar;
$this->params['breadcrumbs'][] = ['label' => 'Threadstars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="threadstar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_threadstar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_threadstar], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_threadstar',
            'rate_threadstar',
            'user_id',
            'thread_id',
        ],
    ]) ?>

</div>
