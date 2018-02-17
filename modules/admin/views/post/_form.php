<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>
    <?= $form->field($model, 'date')->textInput() ?>
    <?= $form->field($model, 'status')->textInput() ?>
    <?= $form->field($model, 'category_id')->textInput() ?>
    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'img_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>