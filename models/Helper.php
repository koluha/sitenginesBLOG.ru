<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

class Helper {

    //Обрезать текст до тега [more], и поставить ссылку ДАЛЕЕ
    public static function moreText($text, $post_id = '') {
        $p = strpos($text, '[more]');
        if ($p != FALSE) {
            $text = substr($text, 0, $p);
            $text.=Html::a(' далее...', ['post/index', 'id' => $post_id], ['class' => 'link-more']);
        }
        return $text;
    }

    //Удаление тэга [more]
    public static function delmoreText($text) {
        $r = preg_replace('~\[more\]~', '', $text);
        return $r;
    }

}
