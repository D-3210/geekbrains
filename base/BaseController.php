<?php

namespace app\base;

use yii\web\Controller;

class BaseController extends Controller {

    public function afterAction($action, $result) {
        echo 'after action<br>';
        echo 'test<br>';
        return parent::afterAction($action, $result);
//        parent::afterAction($action);
    }

    public function beforeAction($action) {
        echo 'before action<br>';
        echo 'test<br>';
        return parent::beforeAction($action);
//        parent::beforeAction($action);
    }

}
