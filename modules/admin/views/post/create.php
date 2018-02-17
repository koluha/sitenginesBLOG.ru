<?php

use yii\helpers\Html;

$this->title = 'Создать публикацию';
$this->params['breadcrumbs'][] = ['label' => 'Список публикации', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>