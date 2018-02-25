<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use mihaildev\elfinder\InputFile;
use yii\web\JsExpression;
use app\models\core\Categories;
use app\models\core\Status;

$ob_status=new Status;

?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'content')->widget(CKEditor::className(), [


        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'full',
            'inline' => false,
            'clientOptions' => [ 'filebrowserImageUploadUrl' => '/files/upload'],
        ])
    ]);
    ?>

    <?= $form->field($model, 'date')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($ob_status->data) ?>
    
    <?= $form->field($model, 'category_id')->dropDownList(Categories::drop_list()) ?>
    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>
    <?=
    $form->field($model, 'img_title')->widget(InputFile::className(), [
        'language' => 'ru',
        'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
     //   'path' => 'image', // будет открыта папка из настроек контроллера с добавлением указанной под деритории 
      //  'filter' => 'image', // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
        'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options' => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-default'],
     //   'multiple' => false       // возможность выбора нескольких файлов
    ]);
    ?>
    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
</div>