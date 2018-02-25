<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\core\Categories;

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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [ 'attribute' => 'category_id',
                'label' => 'Категория',
                'format' => 'raw',
                'value' => function($data) {
            return $data->get_categories($data->category_id);
        },],
            'title',
            'date',
            [ 'attribute' => 'status',
                'label' => 'Статус',
                'format' => 'raw',
                'value' => function($data) {
            return $data->get_status($data->status);
        },],
            'tags',
            'img_title',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>