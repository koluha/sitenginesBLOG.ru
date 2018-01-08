<?php

namespace app\models\core;

use Yii;
use yii\base\Model;

class Categories {

    //Все категории 
    static function _list() {
        $categories = Yii::$app->db->createCommand('SELECT * FROM blog_category')
                ->queryAll();
        return $categories;
    }

    //Имя категорий
    static function get_name($id) {
        $title = Yii::$app->db->createCommand('SELECT title FROM blog_category WHERE id=:id')
                ->bindValue(':id', $id)
                ->queryScalar();

        return $title;
    }

}
