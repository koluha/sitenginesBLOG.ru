<?php

namespace app\models\core;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use app\models\core\Status;

class Categories {

    //Все категории 
    static function _list() {
        $categories = Yii::$app->db->createCommand('SELECT * FROM blog_category')
                ->queryAll();
        return $categories;
    }

    //Все категории 
    static function drop_list() {
        $categories = Yii::$app->db->createCommand('SELECT * FROM blog_category')
                ->queryAll();
        $res = ArrayHelper::map($categories, 'id', 'title');
        return $res;
    }

    //Имя категорий
    static function get_name($id) {
        $title = Yii::$app->db->createCommand('SELECT title FROM blog_category WHERE id=:id')
                ->bindValue(':id', $id)
                ->queryScalar();
        return $title;
    }

}
