<?php

use yii\helpers\Html;

$this->title = 'Редактировать публикацию: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Список публикаций', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>