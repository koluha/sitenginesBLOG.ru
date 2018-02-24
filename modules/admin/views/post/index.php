<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Список публикации';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать новую публикацию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'category_id',
            'title',
            'date',
            'status',
            'tags',
            'img_title',
            
            
            
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>