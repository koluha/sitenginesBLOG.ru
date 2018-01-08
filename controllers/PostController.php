<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\core\Post;
use app\models\core\Categories;

class PostController extends AppController {

    private $ob_post;
    private $ob_category;

    function init() {
        parent::init();

        $this->ob_post = new Post;
    }

    //Просмотр поста
    public function actionIndex($id) {
        $post = $this->ob_post;

        return $this->render('index', [
                    'post' => $post->Get($id),
        ]);
    }

    //Просмотр списка категории
    public function actionCategories($id) {
        $post = $this->ob_post;
        $c_list = $post->Category_list($id);

        //имя заголовка кат
        $c_title = Categories::get_name($id);

        if ($c_list) {
            return $this->render('/post/list', ['posts' => $c_list]);
        } else {
            return $this->render('/post/not_c', ['c_title' => $c_title]);
        }
    }

}
