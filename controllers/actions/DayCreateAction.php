<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers\actions;

use app\models\Day;
use yii\base\Action;

class DayCreateAction extends Action {

    public function run() {
        $model = new Day();
        
        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            
            print_r($model->getAttributes());
           
            if(!$model->validate()){
                print_r($model->getErrors());
            }
            exit;
        }
        
        return $this->controller->render('day-create', ['model' => $model]);
    }
}