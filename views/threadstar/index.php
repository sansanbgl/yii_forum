<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ThreadstarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Threadstars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="threadstar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Threadstar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_threadstar',
            'rate_threadstar',
            'user_id',
            'thread_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
