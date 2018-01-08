<?php

use yii\helpers\Html;

//Получить и вывести список категорий
echo '<h4>Категорий</h4>';
foreach (Categories::_list() as $cat) {
    echo 
    '<div class="blog-grids"><div class="blog-grid-right"><h5>'
    .Html::a($cat['title'], ['post/categories', 'id' => $cat['id']]).
    '</h5></div><div class="clearfix"></div></div>';
    
}