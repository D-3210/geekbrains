<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActivityCreateAction
 *
 * @author Дмитрий
 */

namespace app\controllers\actions;

use app\models\Activity;
use yii\base\Action;

class ActivityCreateAction extends Action {
    
    public $name;

    public function run() {
        $model = \Yii::$app->activity->getModel();
        
        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            
            print_r($model->getAttributes());
           
            if(\Yii::$app->activity->createActivity($model)){
                
            }
            
        }
        
        return $this->controller->render('create', ['model' => $model, 'name' => $this->name]);
    }
}
