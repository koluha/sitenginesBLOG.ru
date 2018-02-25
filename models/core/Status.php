<?php

namespace app\models\core;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class Status {
    
    public $data= [
            '1' => 'Опубликовано',
            '2' => 'Приватно'
        ];


        public function drop_list() {
        $res = $this->data;
        return $res;
    }
    
    

}
