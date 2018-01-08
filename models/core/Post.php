<?php

namespace app\models\core;

use Yii;
use yii\base\Model;

class Post {

    //Весь список
    public function list_() {
        $posts = Yii::$app->db->createCommand('SELECT * FROM blog_post WHERE status=:status')
                ->bindValue(':status', 1)
                ->queryAll();
        if($posts){
            return $posts;
        }
    }

    //Просмотр поста
    public function Get($id) {
        $post = Yii::$app->db->createCommand('SELECT * FROM blog_post WHERE id=:id AND status=:status')
                ->bindValue(':id', $id)
                ->bindValue(':status', 1)
                ->queryOne();
        return $post;
    }
    
     //Cписок выбранной категорий
    public function Category_list($id) {
        $list= Yii::$app->db->createCommand('SELECT * FROM blog_post WHERE category_id=:category_id AND status=:status')
           ->bindValue(':category_id', $id)
           ->bindValue(':status', 1)
           ->queryAll();
       
        if($list){
            return $list;
        }
    }

}
