<?php

namespace app\models\core;

use Yii;
use app\models\core\Status;
use app\models\core\Categories;

class Post extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'blog_post';
    }

    public function rules() {
        return [
            [['title', 'content', 'date', 'status', 'category_id', 'tags'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['status', 'category_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['tags', 'img_title'], 'string', 'max' => 150],
            [['meta_title', 'meta_keyword', 'meta_description'], 'string', 'max' => 250],
        ];
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Контент',
            'date' => 'Дата',
            'status' => 'Статус',
            'category_id' => 'Категория',
            'tags' => 'Тэги',
            'img_title' => 'Картинка заголовок 709х174',
            'meta_title' => 'Meta Title',
            'meta_keyword' => 'Meta Keyword',
            'meta_description' => 'Meta Description',
        ];
    }

    //Весь список
    public function list_() {
        $posts = Yii::$app->db->createCommand('SELECT * FROM blog_post WHERE status=:status')
                ->bindValue(':status', 1)
                ->queryAll();
        if ($posts) {
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
        $list = Yii::$app->db->createCommand('SELECT * FROM blog_post WHERE category_id=:category_id AND status=:status')
                ->bindValue(':category_id', $id)
                ->bindValue(':status', 1)
                ->queryAll();

        if ($list) {
            return $list;
        }
    }

    //Вернуть статус по id
    public function get_status($id) {
        $st=new Status;
        $mas = $st->data;
        foreach ($mas as $key => $value) {
            if ($id == $key) {
                return $value;
                exit();
            }
        }
    }
    
    public function get_categories($id){
        $title= Categories::get_name($id);
        return $title;
    }
}
