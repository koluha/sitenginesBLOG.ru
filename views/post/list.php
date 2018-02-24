<?php

use app\models\Helper;
use yii\helpers\Html;

$this->title = 'Разработка приложений БЛОГ';
//Список постов
foreach ($posts as $post) {
    echo '<div class="tc-ch">';
    echo ' <div class="tch-img">';
    $img_name=($post['img_title'])?$post['img_title']:'/img/noimage.jpg';
    echo Html::a(Html::img($img_name, ['class' => 'img-responsive']), ['post/index', 'id' => $post['id']]);

    echo '</div>';
   
    echo '<a class="blog blue" href="singlepage.html">теги: '  . $post['tags'] . '</a>';
    
    echo '<h3>'.Html::a($post['title'], ['post/index', 'id' => $post['id']]).'</h3>';
    echo Helper::moreText($post['content'], $post['id']);

    echo '<div class="blog-poast-info">
        <ul>
            <li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Администратор </a></li>
            <li><i class="glyphicon glyphicon-calendar"> </i>' . $post['date'] . '</li>
            <li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">0 Комментария </a></li>
            <li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">0 В избранном </a></li>
            <li><i class="glyphicon glyphicon-eye-open"> </i>0 просмотров</li>
        </ul>
    </div>';

    echo '</div>';
}
?>



